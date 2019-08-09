<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Prestataire;
use App\Form\PrestataireType;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;

class PrestataireController extends AbstractController
{
    /**
     * @Route("/prestataire", name="prestataire")
     */
    public function prest(request $request): Response {
       $prestataire = new Prestataire();
       $form = $this->createForm(PrestataireType::class, $prestataire);
       $form->handleRequest($request);
       $rep=$request->request ->all();
       $form->submit($rep);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($prestataire);
            $entityManager->flush();
        }       
    }
    public function user(request $request): Response {
        $user = new User();
        $form = $this->createForm(PrestataireType::class, $user);
        $form->handleRequest($request);
        $rep=$request->request->all();
        $form->submit($rep);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $data=['Message'=>'TRES BIEN'];
            return Response($data);
        }
    }
}
