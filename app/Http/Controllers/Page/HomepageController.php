<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index(){
        return view('page.home');
    }
    public function destination(){
        return view('page.destination');
    }
    public function destination_show(){
        return view('page.destinations-show');
    }
}
