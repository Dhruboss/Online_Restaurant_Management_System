<?php

namespace App\Http\Controllers;

use App\Models\pages;
use App\Http\Requests\StorepagesRequest;
use App\Http\Requests\UpdatepagesRequest;

class PagesController extends Controller
{
 
    public function home(){
        return view('pages.home');
    }
}
