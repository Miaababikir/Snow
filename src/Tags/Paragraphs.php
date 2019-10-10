<?php


namespace miaababikir\Snow\Tags;


class Paragraphs implements TagsContract
{

    public static function parse($data)
    {
        return "<p>{$data->text}</p>";
    }
}