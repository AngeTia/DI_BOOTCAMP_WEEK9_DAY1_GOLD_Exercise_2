<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HttpFoundationController extends AbstractController
{
    #[Route('/http/foundation', name: 'app_http_foundation')]
    public function index(Request $request): Response
    {

        return $this->render('http_foundation/index.html.twig', [
            'pathInfo' => $request->getPathInfo(),
            'method' => $request->getMethod(),
            'host' => $request->headers->get('host'),
            'contenttype' => $request->headers->get('content-type')
        ]);
    }
}
