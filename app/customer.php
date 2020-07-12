<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $guarded=[];
    public function posts(){
        return $this->hasMany(post::class);
    }
}
