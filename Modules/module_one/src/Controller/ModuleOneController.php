<?php

namespace Modules\module_one\src\Controller;

use Modules\module_one\src\Service\ModuleOneService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModuleOneController extends AbstractController
{
    #[Route('/module-one/hello/{name}', name: 'module_one_hello')]
    public function hello(string $name, ModuleOneService $service): Response
    {
        return new Response($service->greet());
    }
}