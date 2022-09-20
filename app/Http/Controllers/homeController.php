<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = post::orderBy('id','desc')->get();
        $data = Post::all();
        $id = 1;
        return view('home',['data'=>$data,'id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new post();
        $post->name = $request->name;
        $post->description = $request->description;
        $post->save();
        return redirect("/home");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $home)
    {
        // $table = post::where('id',$id)->get(); self try
        // $table = post::findOrFail($id);
        // sayar way is more easy
        return view('page',['table'=>$home]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $home)
    {
        // $table = post::findOrFail($id);
        return view('edit',['table'=>$home]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $home)
    {
        // $currentRow = post::findOrFail($id);
        $home->name = $request->name;
        $home->description = $request->description;
        $home->save();
        return redirect("/home");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $home)
    {
        $home->delete();
        return redirect("/home");
    }
}
