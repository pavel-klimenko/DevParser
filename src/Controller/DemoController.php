<?php

namespace App\Controller;

use App\Service\GreetingService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    #[Route('/hello/{name}', methods: ['GET'])]
    public function hello(string $name, GreetingService $greetingService): Response
    {
        return new Response($greetingService->greet($name));
    }
}