<?php


namespace Miaababikir\Snow\Tags;


class Lists implements TagsContract
{

    public static function parse($data)
    {
        $html = '<ul>';

        foreach ($data->items as $item) {
            $html .= "<li>{$item}</li>";
        }
        return $html . "</ul>";
    }
}