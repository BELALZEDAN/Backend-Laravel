<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Http\Resources\GalleryResource;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::get();
        return GalleryResource::collection($gallery);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
            if($request->hasFile('image')){
                $image = upload_array_file($request->image,'gallery','gallery');
            }
            $images = array();
            foreach ( $image  as $key => $value) {
                $gallery = Gallery::create(['image'=>$value]);
                array_push($images,$gallery);
            }
        return GalleryResource::collection($images);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return response()->json(new GalleryResource($gallery), 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $image = $gallery->image;

        if($request->hasFile('image'))
        {
            delete_file_if_exist($image);
            $image = upload_array_file($request->image,'gallery','gallery');
        }
        $images = array();
        foreach ( $image  as $key => $value) {
            $gallery->update(['image'=>$value]);
            array_push($images,$gallery);
        }
    return GalleryResource::collection($images);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        delete_file_if_exist($gallery->image);
        $gallery->delete();
        return response()->json(null, 204);
    }
}
