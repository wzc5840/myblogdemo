<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public  function show(){
        return view('test.main');
    }

    public  function study(){
        return view('test.study');
    }
}
