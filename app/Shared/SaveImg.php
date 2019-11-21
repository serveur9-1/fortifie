<?php


namespace App\Shared;


class SaveImg
{
    public function saveImg($array, $path, $attr="img")
    {
        if($array->hasfile($attr))
        {
            $file = $array->file($attr);
            $filename = $array->file($attr)->getClientOriginalName();
            $file->move("assets/img$path", $filename);
        }
    }
}
