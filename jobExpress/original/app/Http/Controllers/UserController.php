<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Company;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function subscriptions(){
       $subscriptions=  Auth::user()->subscribe;
       $groups_list = \App\Group::with('subgroups','jobs')->get();
        return view('companies.user-subscriptions',compact('subscriptions','groups_list'));
    }

    public function profile(){
        return view('users.profile');
    }

    public function subscribe(Company $company){
        Auth::user()->subscribe()->attach($company);
        return 'subscribe';
    }

    public function addSkills(Request $request){
       
         $data =  $request->all();

         Auth::user()->skills()->attach($data['skills']);
         return response()->json([
                'msg'=>'done completing adding skills'
         ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
