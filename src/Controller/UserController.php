<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    //gestion de l'envoie du formulaire à la BDD : EntityManagerInterface $entityManger
    public function index(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $hasher): Response
    {
        $user= new User();
        $form=$this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //récupération des données du formulaire
            $user = $form->getData();
            //utilisation de l'entityManager:récupére et mets les données en mémoire
            
            $password=$hasher->hashPassword($user, $user->getPassword());
            $user->setPassword($password);

            $entityManager->persist($user);
            //envoie les données en BDD
            $entityManager->flush();
        }

        return $this->render('user/index.html.twig', [
            
            'form' =>$form->createView(),
        ]);
    }
}
