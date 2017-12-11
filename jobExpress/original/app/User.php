<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Task;
use Auth;
class User extends Authenticatable  implements JWTSubject
{
    use Notifiable;


    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
     public function getJWTIdentifier()
     {
         return $this->getKey();
     }
 
     /**
      * Return a key value array, containing any custom claims to be added to the JWT.
      *
      * @return array
      */
     public function getJWTCustomClaims()
     {
         return [];
     }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','fullname','email', 'password','other_address','address_id',
        'company_id','user_type_id','age','phone','avatar','gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function address(){
        return $this->belongsTo('App\Address');
    }


    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function user_type(){
        return $this->belongsTo('App\UserType');
    }

    public function skills(){
        return $this->belongsToMany('App\Skill');
    }
  
   public function roles(){
       return $this->belongsToMany('App\Role');
   }

   public function applied(){
    return $this->belongsToMany('App\Job');
  }
  
  public function subscribe(){
    return $this->belongsToMany('App\Company','user_subscriptions','user_id','company_id');
  }
  
  protected $iid;
  public function userHasApplied($id){
      $this->iid = $id; 
      //return $this->iid;
    $app= \App\User::where('id',Auth::id())->with(['applied'=>function($query){
         $query->where('job_id','=',$this->iid);
    }])->get();
    return $app;
}


}
