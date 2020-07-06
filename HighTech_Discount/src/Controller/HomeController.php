<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController
{
    /**
     * @var Environment
     */

    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function index(): Response
    {
        return new Response($this->twig->render('pages/home.html.twig'));
    }

    public function cart(): Response
    {
        return new Response($this->twig->render('pages/cart.html.twig'));
    }

    public function collections(): Response
    {
        return new Response($this->twig->render('pages/collections.html.twig'));
    }

    public function all(): Response
    {
        return new Response($this->twig->render('pages/allcollections.html.twig'));
    }

    public function journal(): Response
    {
        return new Response($this->twig->render('pages/journal.html.twig'));
    }
}

?>
