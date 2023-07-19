<?php

namespace App\Http\Controllers;
use App\Models\order;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function home (){
        return view('home');
    }
    public function menu (){
        return view('menu');
    }
    public function order (){
        return view('order');
    }
    public function add(Request $request ){
        order::create($request->all());
        return redirect(to:'order');
    }
}
