<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use Validator;
use Carbon\carbon;
use File;
//use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $posts= Post::where('user_id',Auth::user()->id)->latest()->paginate(6); ;  
         return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data= $request->only([ "title","description", "text","file"]);
        // $file = $request->file('file');
        //return $request->all();
           
  
        $validate = Validator::make( $data, [
            'title' => 'required|string|min:30|max:100',
            'description' => 'required|string|min:100|max:250',
            'text' => 'required',
            'file'=>'required | mimes:jpeg,jpg,png,PNG | max:1000'
        ]);

        if($validate->fails()){
            $errors = $validate->errors();
            return redirect('/post/create')->withInput()->withErrors($errors);
        }

        if($request->hasFile('file') && $request->file('file')->isValid()){
            $originalName=$request->file('file')->getClientOriginalName();
            $pathName=storage_path('app/public/');   
            $request->file('file')
            ->move($pathName,$originalName); 
            
        }
          
       
        Post::create([
            "title" => $data["title"],
            "description" => $data["description"],
            "text" => $data["text"],
            "image" => $originalName,
            "user_id"=>Auth::user()->id
        ]);
        $request->session()->flash('message', 'Post was successfully added!');
        return  redirect('/post/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
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
