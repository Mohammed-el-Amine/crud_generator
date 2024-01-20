<?php

namespace App\Controllers\marius;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class mariusController
{
    /**
     * @Route("/marius/list", name="marius_list")
     */
    public function listAction()
    {
           $entities = $entityManager->getRepository(Entity::class)->findAll();
           return new Response('Voir les elements');
    }
}
