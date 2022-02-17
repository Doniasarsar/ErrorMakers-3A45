<?php

namespace App\Controller;

use App\Form\ActeurSType;
use App\Entity\Utilisateurs;
use App\Form\UtilisateursType;
use App\Form\EditUtilisateursType;
use App\Repository\UtilisateursRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UtilisateursController extends AbstractController
{
    /**
     * @Route("/utilisateurs", name="utilisateurs")
     */
    public function index(): Response
    {
        return $this->render('utilisateurs/index.html.twig', [
            'controller_name' => 'UtilisateursController',
        ]);
    }
      /**
     * @Route("/utilisateurs/add",name="userAdd")
     */

    public function AddUser(Request $request , UserPasswordEncoderInterface $encoder){
        $em = $this->getDoctrine()->getManager();
        $user= new Utilisateurs();
        $form=$this ->createForm(UtilisateursType::class,$user);
        $form->add('Register', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
           

            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);


            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('home');

        }

        return $this->render('utilisateurs/addUser.html.twig', [
            'userForm'=>$form->createView(),
        ]);
    }

    /**
     * @Route("/utilisateurs/addActeur",name="acteurSAdd")
     */

    public function AddActeurS(Request $request , UserPasswordEncoderInterface $encoder){
        $em = $this->getDoctrine()->getManager();
        $user= new Utilisateurs();
        $form=$this ->createForm(ActeurSType::class,$user);
        $form->add('Register', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $user->setToken(md5(uniqid()));

            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('home');

        }

        return $this->render('utilisateurs/addActeurS.html.twig', [
            'ActeurSForm'=>$form->createView(),
        ]);
    }

  

     /**
     * @Route("/utilisateurs/update/{id}",name="userupdate")
     */
    public function Update($id,UtilisateursRepository $rep,Request $request){
        
        $user=$rep->find($id);

        $form=$this->createform(EditUtilisateursType::class,$user);
        $form->add('Update',SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

        $em=$this->getDoctrine()->getManager();
        $em->flush();
        $this->addFlash('success','Info changed');
        return $this->redirectToRoute('usercompte');

        }return $this->render("utilisateurs/update.html.twig", [
            'userForm'=>$form->createView(),
            'user'=>$user,
          
        ]);

     }
     /**
     * @Route("/utilisateurs/compte",name="usercompte")
     */
    public function Compte(){
        
      
        return $this->render("utilisateurs/compte.html.twig");

     }
     /**
     * @Route("/utilisateurs/updatepass",name="passupdate")
     */
    public function EditPassword(UtilisateursRepository $rep ,Request $request , UserPasswordEncoderInterface $encoder ){
        
        if($request->isMethod('POST')){
            $em= $this->getDoctrine()->getManager();
            $user=$this->getUser();
            if($request->request->get('pass') == $request->request->get('pass2')){
                $user->setPassword($encoder->encodePassword($user,$request->request->get('pass')));
                $em->flush();
                $this->addFlash('success','Password changed');
                return $this->redirectToRoute('usercompte');
               
            }else
            $this->addFlash('error','Password does not match');


        }
        return $this->render("utilisateurs/updatepass.html.twig");

     }
     /**
     * @Route("/activation/{token}",name="activation")
     */
     public function activation($token, UtilisateursRepository $rep){
            $user=$rep->findOneBy(['Token'=>$token]);

            if(!$user){
                throw $this->createNotFoundException("Cet utilisateur n'existe pas");
            }
            $user->setToken(null);
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('message','Compte activé');
            return $this->redirectToRoute('login');
     }
     /**
     * @Route("/login", name="login")
     */
    public function login(): Response
    {
        return $this->render('security/login.html.twig');
    }
     /**
     * @Route("/logout", name="logout")
     */
    public function logout(){}

  

     
}