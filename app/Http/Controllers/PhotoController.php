<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Http\Requests\PhotoRequest;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::orderBy('name')->with(['gallery', 'category'])->get();
        return response()->json($photos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhotoRequest $request)
    {
        $photo = new Photo();
        $photo->gallery_id = $request->gallery_id;
        $photo->category_id = $request->category_id;
        $photo->name = $request->name;
        $photo->route = $request->route;
        $photo->description = $request->description;
        if ($request->hasFile("route")) {

            $imagen = $request->file("route");
            $nombreimagen = \Str::slug($request->route) . "." . $imagen->guessExtension();
            $ruta = public_path("/photos");
            $imagen->move($ruta, $nombreimagen);
            $photo->route = $nombreimagen;
        }
        $photo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
