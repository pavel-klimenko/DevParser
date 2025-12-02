<?php

namespace Modules\module_two\src\Controller;

use Modules\module_two\src\Service\ModuleTwoService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModuleTwoController extends AbstractController
{
    #[Route('/module-two/hello/{name}', name: 'module_two_hello')]
    public function hello(string $name, ModuleTwoService $service): Response
    {
        return new Response($service->greet());
    }
}