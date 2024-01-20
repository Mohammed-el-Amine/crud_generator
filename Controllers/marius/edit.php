<?php

namespace App\Controllers\marius;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class mariusController
{
    /**
     * @Route("/marius/edit/{id}", name="marius_edit")
     */
    public function editAction($id)
    {
         $entity = $entityManager->getRepository(Entity::class)->find($id);
         $entityManager->flush();
        return new Response('Édition de l\'élément avec l\'ID: ' . $id);
    }
}
