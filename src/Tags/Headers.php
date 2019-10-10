<?php


namespace miaababikir\Snow\Tags;


class Headers implements TagsContract
{

    public static function parse($data)
    {
        return "<h{$data->level}>{$data->text}</h{$data->level}>";
    }
}