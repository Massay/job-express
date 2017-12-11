<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $roles = Auth::user()->roles; 
        $jobs =\App\Job::with('company','type','groups','applications')->paginate(8);
        $groups = \App\Group::with('subgroups','jobs')->get();
        $companies = \App\Company::all();
        //return $groups;
        //return $jobs[1]->applications->whereIn('id',3);
        //return $jobs;
        //return $jobs;
       // return $jobs;
        // $data = $jobs[0]['created_at'];
        // //return $jobs;
        // //return $data;
        //$carbon = new Carbon($data);
       // return $carbon->toFormattedDateString();  
       // return $carbon;  
        //return Carbon::createFromFormat('Y-m-d H', '1975-05-21 22')->toDateTimeString(); 
        //$dt = Carbon::parse('2012-9-5 23:26:11.123789');
        //return $jobs;
        //return $dt;
        //return $jobs['created_at'];
        //return $jobs[0]['created_at']->toFormattedDateString();
        //$jobs['created_at'] = $jobs['created_at']->toFormattedDateString();  
        return view('home',compact(['jobs','companies','groups']));
    }
}
