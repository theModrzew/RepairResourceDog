<?php

namespace Rrd\FrontController;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Rrd\View\ViewInterface;
use Slim\Routing\RouteParser;

class HomeController
{
    private ViewInterface $view;
    private RouteParser $routeParser;

    public function __construct(ViewInterface $view, RouteParser $routeParser)
    {
        $this->view = $view;
        $this->routeParser = $routeParser;
    }

    public function index(Request $request, Response $response, $args = []) : Response
    {
        $this->view->set('queryUrl', $this->routeParser->urlFor('run-search'));
        $this->view->set('uploadUrl', $this->routeParser->urlFor('file-upload'));

        $response->getBody()->write(
            $this->view->renderPage('home')
        );

        return $response;
    }
}
