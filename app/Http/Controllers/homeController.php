<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        $data = post::all();
        $id = 1;
        return view('home',["data"=>$data,"id"=>$id]);
    }
}
