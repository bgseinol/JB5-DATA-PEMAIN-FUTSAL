<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class HomeController extends Controller
{
    function index(){
        return view('home');
    }
}
