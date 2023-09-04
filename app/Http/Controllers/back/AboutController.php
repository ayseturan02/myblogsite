<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts=About::orderBy("id","ASC")->get();
        return view("back.about.index",compact("abouts"));
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
        $about=new About;
        $about->title=$request->title;
        $about->content=$request->content;
        $about->education=$request->education;
        $about->instagram=$request->instagram;
        $about->twitter=$request->twitter;
        $about->githup=$request->githup;
        $about->gmail=$request->gmail;
        $about->discord=$request->discord;
        $about->address=$request->address;
        $about->telephone=$request->telephone;
        $about->save();
        return redirect()->route("admin.hakkında.index");
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

        $about=About::find($id);
        return view("back.about.edit",compact("about"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $about=About::find($request->id);
        if (isset($about)){
            $about->title=$request->title;
            $about->content=$request->content;
            $about->education=$request->education;
            $about->instagram=$request->instagram;
            $about->twitter=$request->twitter;
            $about->githup=$request->githup;
            $about->gmail=$request->gmail;
            $about->discord=$request->discord;
            $about->address=$request->address;
            $about->telephone=$request->telephone;
            $about->save();
        }
        return redirect()->route("admin.hakkında.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about=About::find($id);
        if(isset($about)){
            $about->delete();
        }
        return redirect()->route("admin.hakkında.index");
    }
}
