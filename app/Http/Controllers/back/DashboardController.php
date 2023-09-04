<?php

namespace App\Http\Controllers\back;


use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(){

        $abouts=About::orderBy("id","ASC")->get();
        return view("back.about.index",compact("abouts"));
    }
}


