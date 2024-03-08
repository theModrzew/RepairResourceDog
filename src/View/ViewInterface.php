<?php

namespace Rrd\View;

use Rrd\System\TemplateNotFoundException;

interface ViewInterface
{
    /**
     * Sets a variable available to template system.
     *
     * @param string $variable
     * @param string $value
     */
    public function set(string $variable, string $value);

    /**
     * Clears all the set variables.
     */
    public function clear();

    /**
     * Render full page.
     *
     * @param string $fileName
     * @return string
     * @throws TemplateNotFoundException
     */
    public function renderPage(string $fileName) : string;

    /**
     * @param string $fileName
     * @return string
     * @throws TemplateNotFoundException
     */
    public function render(string $fileName) : string;
}
