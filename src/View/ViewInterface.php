<?php

namespace Rrd\View;

interface ViewInterface
{
    public function set(string $variable, string $value);

    public function clear();

    public function renderPage(string $fileName);
}
