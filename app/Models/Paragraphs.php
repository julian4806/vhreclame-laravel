<?php

namespace App\Models;

class Paragraphs
{
    public static function all()
    {

    }
    public static function find($id)
    {
        $paragraphs = self::all();
        foreach ($paragraphs as $paragraph) {
            if ($paragraph['id'] == $id) {
                return $paragraph;
            }
        }
    }
}
