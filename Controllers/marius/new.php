<?php

namespace App\Controllers\marius;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class mariusController
{
    /**
     * @Route("/marius/new", name="marius_new")
     */
    public function newAction()
    {
           $entityManager->persist($entity);
           $entityManager->flush();
           return new Response('Création de l\'élément avec succès');
    }
}
