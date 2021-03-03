<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['body'];
    //Per sostituire lo slug all'id
    public function getRouteKeyName()
    {
        //nome della colonna. In questo caso 'body'
        return 'body';
    }
}
