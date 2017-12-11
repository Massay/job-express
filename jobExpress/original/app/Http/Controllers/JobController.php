<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Auth;
use App\Type;
use Carbon\Carbon;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $jobs = Job::where('company_id',Auth::user()->company_id)->paginate(10);

        return view('jobs.index',compact('jobs'));
    }

    public function showCreateForm(){
    
        $types = Type::all();
        return view('jobs.create',compact('types'));
    }

    public function apply(Job $job){
       
          try{
            $job->applications()->attach(Auth::id());

          }catch(\Illuminate\Database\QueryException $e){
                return $e->errorInfo;
          }
           
                    
    }

    public function userHasApplied($id){
        $app= \App\User::where('id',Auth::id())->with(['applied'=>function($query){
             $query->where('job_id','=',1);
        }])->get();


        return $app;
    }

    public function applications(){
       $applied = Auth::user()->applied()->paginate(5);
       $roles = Auth::user()->roles; 
       $jobs =\App\Job::with('company','type','groups','applications')->paginate(10);
       $groups = \App\Group::with('subgroups','jobs')->get();
       $companies = \App\Company::all();
        return view('jobs.job-applications',compact(['roles','jobs','groups','companies','applied']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        //return $data;
        $job = Job::create([
            'subject' =>  $data['subject'],
            'description' => $data['description'],
            'salary_attachment' => $data['salary_attachment'],
            'close_date' => $data['closing_date'],
            'company_id' => $data['company_id'],
            //'working_hours' => $data['working_hours'],
            'type_id' => $data['type_id'],
            'working_start_time'=>$data['start_working_hours'],
            'working_end_time' => $data['end_working_hours'],
            'exp_yr_min' => $data['min_yrs_exp'],
            'exp_yr_max'=> $data['max_yrs_exp']
        ]);

        $job->groups()->attach($data['groups']);
       // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        $job['applications'] = $job->applications;
        $job['groups'] = $job->groups;
        $job['type'] = $job->type;
        $job['company'] = $job->company;
        //return $job;

        return view('jobs.job-description',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
