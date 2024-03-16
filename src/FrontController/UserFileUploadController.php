<?php

namespace Rrd\FrontController;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Rrd\View\ViewInterface;
use Slim\Routing\RouteParser;

class UserFileUploadController
{
    private ViewInterface $view;
    private RouteParser $routeParser;

    public function __construct(ViewInterface $view, RouteParser $routeParser)
    {
        $this->view = $view;
        $this->routeParser = $routeParser;
    }

    public function upload(Request $request, Response $response, $args = []) : Response
    {
        $userFiles = $request->getUploadedFiles();
        $userData = $request->getParsedBody();

        if (!array_key_exists('proposed_file', $userFiles)) {
            return $response->withStatus(302)
                ->withHeader(
                    'Location',
                    $this->routeParser->urlFor('home-page', [], ['err' => 'no_file'])
                );
        }

        $body = $response->getBody();
        $body->write(
            '<pre>' . print_r($userData, true) . print_r($userFiles, true) . '</pre>'
        );

        return $response->withBody($body);
    }
}
