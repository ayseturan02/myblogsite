<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Ability;

class AbilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abilities=Ability::orderBy("id","ASC")->get();
        return view("back.abilities.index",compact("abilities"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("back.abilities.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ability=new Ability();
        $ability->title=$request->title;
        $ability->content=$request->content;
        $ability->class=$request->class;
        $ability->save();
        return redirect()->route("admin.yetenekler.index");
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
        $ability=Ability::find($id);
        return view("back.abilities.edit",compact("ability"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $ability=Ability::find($request->id);
        if (isset($ability)){
            $ability->title=$request->title;
            $ability->content=$request->content;
            $ability->class=$request->class;
            $ability->save();
        }
        return redirect()->route("admin.yetenekler.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ability=Ability::find($id);
        if(isset($ability)){
            $ability->delete();
        }
        return redirect()->route("admin.yetenekler.index");
    }
}
