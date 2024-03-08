<?php

namespace Rrd\View;

use Rrd\System\TemplateNotFoundException;

class ViewRenderer implements ViewInterface
{
    private string $templateDir;
    private PageRenderOrchestrator $renderOrchestrator;
    private array $variables = [];

    public function __construct(string $templateDir, PageRenderOrchestrator $renderOrchestrator)
    {
        $this->templateDir = $templateDir;
        $this->renderOrchestrator = $renderOrchestrator;
    }

    /** @inheritDoc */
    public function clear()
    {
        $this->variables = [];
    }

    /** @inheritDoc */
    public function set(string $variable, string $value)
    {
        $this->variables[$variable] = $value;
    }

    /** @inheritDoc */
    public function renderPage(string $fileName) : string
    {
        $body = $this->render($fileName);

        $this->variables = $this->renderOrchestrator->getHeaderVariables();
        $header = $this->render('header');

        $this->variables = $this->renderOrchestrator->getFooterVariables();
        $footer = $this->render('footer');

        $this->variables = $this->renderOrchestrator->getMainVariables();
        $this->set('header', $header);
        $this->set('body', $body);
        $this->set('footer', $footer);
        $result = $this->render('main');
        $this->clear();

        return $result;
    }

    /** @inheritDoc */
    public function render(string $fileName) : string
    {
        ob_start();

        $path = $this->templateDir . $fileName . '.html.php';

        if (!file_exists($path) || !is_file($path)) {
            throw new TemplateNotFoundException('Template ' . $path . ' not found');
        }

        extract($this->variables);
        include $path;
        return (string)ob_get_clean();
    }
}
