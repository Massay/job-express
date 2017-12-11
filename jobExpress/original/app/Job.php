<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Job extends Model
{
  protected $touches = ['company','groups','type','applications'];

    protected $fillable = ['subject','description',
    'salary_attachment','close_date',
    'working_hours','company_id','status','type_id','exp_yr_min','exp_yr_max','working_start_time',
    'working_end_time'
  ];


  protected $dates =['close_date'];

  //protected $created_at;


  public function company(){
    return $this->belongsTo('App\Company');
  }
  public function groups(){
     return $this->belongsToMany('App\Group');
  }

  public function applications(){
    return $this->belongsToMany('App\User');
 }

  public function type(){
    return $this->belongsTo('App\Type');
  }
  

 


}
