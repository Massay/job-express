<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable=['name','other_address','address_id','country','email','about'];
    public function address(){
        return $this->belongsTo('App\Address');
    }

    public function subscriptions(){
        return $this->belongsToMany('App\User');
      }
}
