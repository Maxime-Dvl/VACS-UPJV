<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
//use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Disponibilite;
use App\Entity\User;
use App\Form\DisponibiliteType;



class DisponibiliteController extends AbstractController
{

    /**
     * @Route("/disponibilite", name="add_disponibilite")
     */
    public function addDisponibilite(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $repo = $this->getDoctrine()->getRepository(Disponibilite::class);
        $disponibilites = $repo->findAll();

        $user = new User();        
        $disponibilite = new Disponibilite();
        $form = $this->createForm(DisponibiliteType::class, $disponibilite);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $user = $this->getUser();

            $disponibilite->setReserve(FALSE);
            $disponibilite->setMetier('-');
            $disponibilite->setUser($user);
            $entityManager->persist($disponibilite); 
            $entityManager->flush();
            return $this->redirectToRoute('add_disponibilite');
        }
        


        return $this->render('disponibilite/index.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'DisponibiliteController',
            'disponibilites' => $disponibilites
        ]);
    }


     /**
     * @Route("/disponibilite/{id}", name="edit_disponibilite", methods={"GET|POST"})
     */
    public function show($id){

        $repo = $this->getDoctrine()->getRepository(Disponibilite::class);

        $disponibilites = $repo->find($id);

        return $this->render('disponibilite/editDispo.html.twig', [
            'disponibilites' => $disponibilites
        ]);
    }

    
    /**
     * @Route("/disponibilite/{id}", name="supp_disponibilite", methods={"DELETE"})
     */
    public function suppDispo(Disponibilite $disponibilite){
        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->remove($disponibilite);
        $entityManager->flush();
        return $this->redirectToRoute('add_disponibilite');
    }


}
