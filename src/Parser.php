<?php


namespace Miaababikir\Snow;


class Parser
{
    public static function parse($json)
    {
        $parser = new JsonParser($json);

        return $parser->getHTML();
    }
}