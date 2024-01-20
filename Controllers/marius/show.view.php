<?php

namespace App\Controllers\marius;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class mariusController
{
    /**
     * @Route("/marius/show/{id}", name="marius_show")
     */
    public function showAction($id)
    {
           $entity = $entityManager->getRepository(Entity::class)->find($id);
           return new Response('Voir l\'élément avec l\'ID: ' . $id);
    }
}
