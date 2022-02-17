<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeType;
use App\Entity\Utilisateur;
use App\Entity\LigneCommande;
use App\Repository\ProduitRepository;
use App\Repository\CommandeRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommandeController extends AbstractController
{
    /**
     * @Route("/commande/{id}", name="commande")
     */
    public function ajoutercommande(Request $request,SessionInterface $session, ProduitRepository $produitrep,Utilisateur $utilisateur ,UtilisateurRepository $rep): Response
    {   $panier = $session->get("panier",[]);
        $client = $session->get("client", $utilisateur->getId());

        
        // on fabrique les données 

        $dataPanier = []; 
        $total = 0; 
        

        foreach ($panier as $id => $quantite){
            $produit = $produitrep->find($id);
            $dataPanier[] = [
                "produit" => $produit,
                "quantite" => $quantite  
            ];
        }
        
        foreach($dataPanier as $item)
        {
            $totalItem = $item['produit']->getPrix() * $item['quantite'];
            $total += $totalItem ;
        }
        $uti =$rep->find($client);

       

        $commande = new Commande();
        $form = $this->createForm(CommandeType::class,$commande);
        $form->add('Ajouter',SubmitType::class) ; 
        $form->handleRequest($request); 
        if ($form->isSubmitted() && $form->isValid()){
            $commande = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($commande);
            $em->flush();
            return $this->redirectToRoute('produit');
        }
       


        return $this->render('commande/ajouter.html.twig', [
                    'formA' => $form->createView(),
                    'total' => $total,
                    'elements' => $dataPanier,
                    'uti' => $uti
        ]);    
    }


    /**
     * @Route("/admin/affcommande", name="admincommande")
     */

     function afficher(CommandeRepository $rep)
    {
         $commande = $rep->findall();
         return $this->render('admin/commande/index.html.twig', [
             'tab' => $commande
         ]);

    }

     /**
     * @Route("/admin/suppcommande/{id}", name="adminsupp")
     */

    function supprimercommande($id ,CommandeRepository $rep)
    {
         $commande = $rep->find($id);
         $em=$this->getDoctrine()->getManager(); 
         $em->remove($commande);
         $em->flush(); 

     return $this->redirectToRoute('admincommande');

    }


     /**
     * @Route("/admin/modifcommande/{id}", name="adminmodif")
     */

    function modifiercommande($id ,CommandeRepository $rep, Request $request)
    {
        $commande=$rep->find($id);
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('admincommande');
       }

       return $this->render('admin/commande/modifier.html.twig', [
        'form' => $form->createView(),
    ]);
    }
 
    /**
     * @Route("/commande4/{id}", name="commande4")
     */
    public function ajoutercommande4(CommandeRepository $repCommande,Request $request,SessionInterface $session, ProduitRepository $produitrep,
    Utilisateur $utilisateur ,UtilisateurRepository $rep): Response
    {   $panier = $session->get("panier",[]);
        $pan2 = $panier;
        $client = $session->get("client", $utilisateur->getId());

        // on fabrique les données 
        $dataPanier = []; 
        $total = 0; 
        

        foreach ($panier as $id => $quantite){
            $produit = $produitrep->find($id);
            $dataPanier[] = [
                "produit" => $produit,
                "quantite" => $quantite  
            ];
           
        }
        
        $tab = [];
        $ligneCommande = new ligneCommande();
        foreach ($pan2 as $id => $key){
            $tab[] = $id;
        }
     
        foreach($dataPanier as $item)
        {
            $totalItem = $item['produit']->getPrix() * $item['quantite'];
            $total += $totalItem ;
        }
        $uti =$rep->find($client);
       
        
        $commande = new Commande();
        $form = $this->createForm(CommandeType::class,$commande);
        $form->add('Ajouter',SubmitType::class) ; 
        $form->handleRequest($request); 
        if ($form->isSubmitted() && $form->isValid()){
            foreach ($tab as $key => $value) {
                $ligneCommande = new ligneCommande();
                $ligneCommande = $ligneCommande->setIdProduit($value);
                $commande = $repCommande->findOneBy([], ['id' => 'desc']);
                $lastId = $commande->getId();
                $ligneCommande = $ligneCommande->setIdCommande($lastId);
                $em = $this->getDoctrine()->getManager();
                $em->persist($ligneCommande);
                $em->flush();
                        
                }
            $commande = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($commande);
            $em->flush();
            return $this->redirectToRoute('produit');
        }
       


        return $this->render('commande/ajouter.html.twig', [
                    'formA' => $form->createView(),
                    'total' => $total,
                    'elements' => $dataPanier,
                    'uti' => $uti
        ]);    
    }




    
       

}

 