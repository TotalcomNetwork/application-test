<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class IndexController extends AbstractController
{
    /**
     * Renders the project's welcome page.
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig');
    }
}
