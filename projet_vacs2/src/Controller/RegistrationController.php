<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
<<<<<<< HEAD
use App\Entity\UserRole;
=======
>>>>>>> 7a5001febfbb4c07fdbe25553eb2082fc72b7cba
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @Route("/registration", name="registration")
     */
    public function index(Request $request)
    {
        $user = new User();
<<<<<<< HEAD
        $userRole = new UserRole();

        $userRole = $this->getDoctrine()->getRepository(UserRole::class)->find(1); 
=======
>>>>>>> 7a5001febfbb4c07fdbe25553eb2082fc72b7cba

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the new users password
            $user->setPassword($this->passwordEncoder->encodePassword($user, $user->getPassword()));

            // Set their role
<<<<<<< HEAD
            $user->setRoles(['']);

            $user->setUserRole($userRole);
=======
            $user->setRoles(['ROLE_USER']);
>>>>>>> 7a5001febfbb4c07fdbe25553eb2082fc72b7cba

            // Save
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}