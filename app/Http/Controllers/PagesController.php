<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getAbout(){
        $todos=Todo::all();
        return view('about',compact(['todos']));
    }
}
