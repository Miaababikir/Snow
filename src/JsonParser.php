<?php


namespace miaababikir\Snow;


use Illuminate\Support\Str;

class JsonParser
{
    private $content;
    private $html = '';

    public function __construct($content)
    {
        $this->content = $content;

        $this->toHTML();
    }

    public function toHTML()
    {
        $blocks = $this->content->blocks;

        foreach ($blocks as $block) {

            $class = 'miaababikir\\Snow\\Tags\\' . Str::plural(Str::title($block->type));
            $this->html .= $class::parse($block->data);
        }
    }

    public function getHTML()
    {
        return $this->html;
    }
}