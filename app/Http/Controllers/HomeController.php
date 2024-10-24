<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("index");
    }
   
}
