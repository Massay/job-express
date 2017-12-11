<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\UserType;
use App\Address;
use App\User;
use Auth;
use DB;
use App\Job;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('companies.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }
  

    public function applicants(){
        // return Job::with(['applications'=>function($query){
        //         $query->where('company_id',Auth::user()->company_id);
        // }])->get(); 
        return view('companies.applicants');
    }
    public function subscribers(){
        return view('companies.subscribers');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $companies = $request->all();

       // return $companies;
        $collection = collect([
                    'name' => $companies['name'], 
                    'address_id' => $companies['address_id'],
                    'other_address'=>$companies['other_address'],
                    'email'=>$companies['email'],
                    'country'=>$companies['country'],
                    'about' => $companies['about']
                ]);
       
         $addresses = Address::all();
        //return $addresses;
        return view('companies.create_admin',compact('addresses','collection'));
    }

    public function posted(){
        return \App\Job::where('company_id',Auth::user()->company_id);
    }

    public function createCompany(Request $request){
       $data = $request->all();
     
            $com=Company::create([
                'name'=> $data['company_name'],
                'other_address'=> $data['company_other_address'],
                'address_id'=>$data['company_address_id'],
                'country'=>$data['company_country'],
                'email'=>$data['company_email'],
                'about'=>$data['company_about'],
            ]);
            User::create([
                'username'=> $data['username'],
                'fullname'=> $data['fullname'],
                'gender'=>$data['gender'],
                'address_id'=>$data['company_address_id'],
                'other_address'=>$data['company_other_address'],
                'phone'=>$data['phone'],
                'email'=>$data['email'],
                'age'=>$data['age'],
                'company_id'=>$com->id,
                'user_type_id'=>2,
                'password'=> bcrypt( $data['password']),
            ]);
            //DB::table('users')->update(['votes' => 1]);
        
            //DB::table('posts')->delete();
      
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
