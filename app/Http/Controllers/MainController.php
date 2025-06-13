<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        $title = 'Home';

        return view("index", compact("title"));
    }

    function contacts(){
        return view("contacts");
    }
}
