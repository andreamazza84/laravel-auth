<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'slug'];
    //Per sostituire lo slug all'id
    public function getRouteKeyName()
    {
        //nome della colonna. In questo caso 'slug'
        return 'slug';
    }
}
