<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ArticleController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage(): Response
    {
        return new Response('WORKS!!!');
    }

    /**
     * @Route("/news/{slug}")
     * @return Response
     */
    public function show($slug): Response
    {
        return new Response('SHOW: ' . $slug);
    }
}
