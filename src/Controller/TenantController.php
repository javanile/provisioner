<?php

namespace Javanile\Provisioner\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TenantController extends AbstractController
{
    /**
     * @Route("/tenant/create", name="tenant_create")
     */
    public function create()
    {
        return $this->json([
            'message' => 'Hello World!'
        ]);
    }
}
