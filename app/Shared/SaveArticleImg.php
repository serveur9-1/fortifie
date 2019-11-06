<?php


namespace App\Shared;


class SaveArticleImg
{
    public function saveImg($array)
    {
        if($array->hasfile('img'))
        {
            $file = $array->file('img');
            $filename = $array->file('img')->getClientOriginalName();
            $file->move('assets/img/articles', $filename);
        }
    }
}
