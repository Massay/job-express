<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function subgroups(){
        return $this->hasMany('App\SubGroup');
    } 

    public function jobs(){
        return $this->belongsToMany('App\Job');
     }
}
