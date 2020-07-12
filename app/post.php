<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded=[];
    public function customer(){
        return $this->belongsTo(customer::class);
    }



}
