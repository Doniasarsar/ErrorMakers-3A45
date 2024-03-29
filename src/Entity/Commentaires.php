<?php

namespace App\Entity;

use App\Entity\Utilisateurs;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CommentairesRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CommentairesRepository::class)
 */
class Commentaires
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     *  @Assert\NotBlank(message="contenu is required")
     */
    private $contenu;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active = false;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Email is required")
     * @Assert\Email(message = "The email '{{ value }}' is not a valid email.")
     */
    private $email;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $created_at;


    /**
     * @ORM\ManyToOne(targetEntity=Evenement::class, inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $annonces;

    /**
     * @ORM\ManyToOne(targetEntity=Commentaires::class, inversedBy="reponses", cascade={"persist", "remove"})
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity=Commentaires::class, mappedBy="parent" ,cascade={"persist", "remove"})
     */
    private $reponses;

    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank(message="Pseudo is required")
     */
    private $Pseudo;

    /**
     * @ORM\OneToMany(targetEntity=CommentLike::class, mappedBy="comment")
     */
    private $likes;

    public function __construct()
    {
        $this->reponses = new ArrayCollection();
        $this->likes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }



    public function getAnnonces(): ?Evenement
    {
        return $this->annonces;
    }

    public function setAnnonces(?Evenement $annonces): self
    {
        $this->annonces = $annonces;

        return $this;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(self $reponse): self
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses[] = $reponse;
            $reponse->setParent($this);
        }

        return $this;
    }

    public function removeReponse(self $reponse): self
    {
        if ($this->reponses->removeElement($reponse)) {
            // set the owning side to null (unless already changed)
            if ($reponse->getParent() === $this) {
                $reponse->setParent(null);
            }
        }

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->Pseudo;
    }

    public function setPseudo(string $Pseudo): self
    {
        $this->Pseudo = $Pseudo;

        return $this;
    }

    /**
     * @return Collection<int, CommentLike>
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(CommentLike $like): self
    {
        if (!$this->likes->contains($like)) {
            $this->likes[] = $like;
            $like->setComment($this);
        }

        return $this;
    }

    public function removeLike(CommentLike $like): self
    {
        if ($this->likes->removeElement($like)) {
            // set the owning side to null (unless already changed)
            if ($like->getComment() === $this) {
                $like->setComment(null);
            }
        }

        return $this;
    }
    /**
     * Permet de savoir si cet article est liké par un user
     *  
     * @param Utilisateurs $utilisateur
     * @return boolean
     */
    public function isLikedByUtilisateur(Utilisateurs $utilisateur ) : bool {
             foreach($this->likes as $like){
                 if($like->getUtilisateur() === $utilisateur) return true;
                }
                return false;
    }
}
