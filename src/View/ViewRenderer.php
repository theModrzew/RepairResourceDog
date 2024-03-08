<?php

namespace Rrd\View;

use Rrd\System\TemplateNotFoundException;

class ViewRenderer implements ViewInterface
{
    private string $templateDir;
    private array $variables = [];

    /**
     * @param string $templateDir
     */
    public function __construct(string $templateDir)
    {
        $this->templateDir = $templateDir;
    }

    public function clear()
    {
        $this->variables = [];
    }

    public function set(string $variable, string $value)
    {
        $this->variables[$variable] = $value;
    }

    /**
     * @param string $fileName
     *
     * @return string
     */
    public function renderPage(string $fileName) : string
    {
        ob_start();

        $path = $this->templateDir . $fileName . '.html.php';

        if (!file_exists($path) || !is_file($path)) {
            throw new TemplateNotFoundException('Template ' . $path . ' not found');
        }

        include $path;
        return (string)ob_get_clean();
    }
}
