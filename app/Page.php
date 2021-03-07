<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded= [];


    public static function findSlug($slug)
    {

        return new Page([
            'title'=>Str::title(str_replace("-",' ',$slug)),
            'slug'=> $slug
        ]);
    }
}
