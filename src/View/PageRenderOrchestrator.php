<?php

namespace Rrd\View;

use Slim\Routing\RouteParser;

class PageRenderOrchestrator
{
    const SITE_NAME = 'Repair Resource Dog';

    private RouteParser $routeParser;

    public function __construct(RouteParser $routeParser)
    {
        $this->routeParser = $routeParser;
    }

    public function getMainVariables() : array
    {
        return [
            'siteName' => self::SITE_NAME
        ];
    }

    public function getHeaderVariables() : array
    {
        return [
            'siteName' => self::SITE_NAME,
            'homeUrl' => $this->routeParser->urlFor('home-page')
        ];
    }

    public function getFooterVariables() : array
    {
        return [
            'yearStarted' => 2024,
            'yearNow' => date('Y'),
            'siteName' =>  self::SITE_NAME
        ];
    }
}
