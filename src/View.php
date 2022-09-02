<?php

namespace MarcolaMr\View;

class View
{
    /** @var array */
    private $vars = [];

    /** @var string */
    private $pathToViews;

    /**
     * Constructor of the class
     *
     * @param string $pathToViews
     */
    public function __construct(string $pathToViews)
    {
        $this->pathToViews = $pathToViews;
    }

    /**
     * Defines the global data
     *
     * @param array $vars
     * @return void
     */
    public function init(array $vars = []): void
    {
        $this->vars = $vars;
    }

    /**
     * Return the rendered content of a view
     * @param string $view
     * @param array $vars
     * @return string
     */
    public function render(string $view, array $vars = []): string
    {
        $contentView = $this->getContentView($view);

        $vars = array_merge($this->vars, $vars);

        $keys = array_keys($vars);
        $keys = array_map(function($item) {
            return "{{". $item ."}}";
        }, $keys);

        return str_replace($keys, array_values($vars), $contentView);
    }

    /**
     * Return the content of a view
     * @param string $view
     * @return string
     */
    private function getContentView(string $view): string
    {
        $file = $this->pathToViews . "/" . $view . ".html";

        return file_exists($file) ? file_get_contents($file) : "";
    }
}