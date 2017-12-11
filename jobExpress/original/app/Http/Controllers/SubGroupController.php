<?php

namespace App\Http\Controllers;

use App\SubGroup;
use Illuminate\Http\Request;

class SubGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subgroups = SubGroup::all();
        return view('subgroups.index',compact('subgroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = \App\Group::all();
        return view('subgroups.create',compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['name','description','group_id']);
        $group = new SubGroup();
        $group->name = $data['name'];
        $group->description = $data['description'];
        $group->group_id = $data['group_id'];
        $group->save();

        return redirect('subgroups');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function show(SubGroup $subGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(SubGroup $subGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubGroup $subGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubGroup $subGroup)
    {
        //
    }
}
