<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::orderBy("id")->get();
        return view("back.photo.index", compact("photos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $photos = Photo::orderBy("id")->get();
        return view("back.photo.create", compact("photos"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $photo = new Photo();
        $photo->id = $request->id;
        if ($request->hasFile("photo")) {
            $path = public_path("Foto/image/");
            $name = Str::random(10);
            $file = $request->file("photo");
            $name .= $name . $file->getClientOriginalName();
            $file->move($path, $name);
            $photo->photo = $name;
        }
        $photo->save();

        return redirect()->route("admin.fotograflar.index");
    }

    public function destroy(string $id)
    {
        $photo = Photo::find($id);
        if (isset($photo)) {
            $photo->delete();
        }
        return redirect()->route("admin.fotograflar.index");
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


}
