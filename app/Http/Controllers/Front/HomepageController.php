<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Ability;
use App\Models\Page;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Person;



class HomepageController extends Controller
{


    public function anasayfa(){
       return view("front.layout.anasayfa");
}


    public function makaleler(){
        $pages=Page::orderBy("id")->get();
        return view("front.layout.makaleler",compact("pages"));
    }

    public function egıtım(){
        $abouts=About::orderBy("id")->get();
        return view("front.layout.egıtım",compact("abouts"));
    }
    public function deneyim(){
        return view("front.layout.deneyim");
    }
    public function galeri(){

        $photos=Photo::orderBy("id")->get();
        return view("front.layout.galeri",compact("photos"));
    }
    public function hakkında(){
        $abouts=About::orderBy("id")->get();
        return view("front.layout.hakkında",compact("abouts"));
    }
    public function sosyalmedya(){
        $abouts=About::orderBy("id")->get();
        return view("front.layout.sosyalmedya",compact("abouts"));
    }

    public function yetenekler(){

        $abilities=Ability::orderBy("id")->get();
        return view("front.layout.yetenekler",compact("abilities"));
    }
    public function iletisim(){

        $abouts=About::orderBy("id")->get();
        return view("front.layout.iletisim",compact("abouts"));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
