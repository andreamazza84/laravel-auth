<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Per sostituire lo slug all'id
    public function getRouteKeyName()
    {
        //nome della colonna. In questo caso 'slug'
        return 'slug';
    }
}
