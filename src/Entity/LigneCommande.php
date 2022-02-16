<?php

namespace App\Entity;

use App\Repository\LigneCommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LigneCommandeRepository::class)
 */
class LigneCommande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $idCommande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $idProduit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCommande(): ?string
    {
        return $this->idCommande;
    }

    public function setIdCommande(string $idCommande): self
    {
        $this->idCommande = $idCommande;

        return $this;
    }

    public function getIdProduit(): ?string
    {
        return $this->idProduit;
    }

    public function setIdProduit(string $idProduit): self
    {
        $this->idProduit = $idProduit;

        return $this;
    }
}