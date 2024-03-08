<?php

namespace Rrd\FrontController;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Rrd\View\ViewInterface;

class HomeController
{
    private ViewInterface $view;

    public function __construct(ViewInterface $view)
    {
        $this->view = $view;
    }

    public function index(Request $request, Response $response, $args = []) : Response
    {
        $this->view->set('x', 'Repair Resource Dog');

        $response->getBody()->write(
            $this->view->renderPage('home')
        );

        return $response;
    }
}
