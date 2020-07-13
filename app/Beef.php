<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beef extends Model
{
    protected $table = 'beefs';


    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
