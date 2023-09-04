<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Page;
use Illuminate\Http\Request;



class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages=Page::orderBy("id","ASC")->get();
        return view("back.articles.index",compact("pages"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("back.articles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $page=new Page;
        $page->title=$request->title;
        $page->content=$request->content;
        $page->save();
        return redirect()->route("admin.makaleler.index");
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
        $page=Page::find($id);
        return view("back.articles.edit",compact("page"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $page=Page::find($request->id);
        if (isset($page)){
            $page->title=$request->title;
            $page->content=$request->content;
            $page->save();
        }
        return redirect()->route("admin.makaleler.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page=Page::find($id);
        if(isset($page)){
            $page->delete();
        }
        return redirect()->route("admin.makaleler.index");
    }
}
