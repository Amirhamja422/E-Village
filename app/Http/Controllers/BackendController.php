<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    //
    function admin(){
        return view('admin.home');
    }

    function category(){
        return view('admin.add_cat');
    }

}
