<?php
// src/Controller/HelloController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
{
    #[Route('/')]
    public function string(): Response
    {
        $hello = "Hello you !";

        return $this->render('hello/hello.html.twig', [
            'hello' => $hello,
        ]);
    }
}