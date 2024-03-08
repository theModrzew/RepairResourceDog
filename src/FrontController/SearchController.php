<?php

namespace Rrd\FrontController;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Rrd\View\ViewInterface;
use Slim\Routing\RouteParser;

class SearchController
{
    private ViewInterface $view;
    private RouteParser $routeParser;

    public function __construct(ViewInterface $view, RouteParser $routeParser)
    {
        $this->view = $view;
        $this->routeParser = $routeParser;
    }

    public function run(Request $request, Response $response, $args = []) : Response
    {
        $response->getBody()->write('meh');
        return $response;
    }
}
