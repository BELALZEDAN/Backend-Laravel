<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Http\Resources\AboutResource;

class AboutController extends Controller
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
        $abouts = About::get();
        return AboutResource::collection($abouts);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutRequest $request)
    {
        if($request->hasFile('image')){
            $image = upload_file($request->image,'about','about');
        }
        if($request->hasFile('banner')){
            $banner = upload_file($request->banner,'about','about');
        }
        $about = About::createWithTranslations([
            'banner'            => $banner??null,
            'image'             => $image??null,
            'title'             => $request->title,
            'title_array'       => $request->title_array??null,
            'description'       => $request->description,
            'description_array' => $request->description_array??null,
        ]);
        return response()->json(new AboutResource($about), 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {

        $about->loadTranslations();
        return response()->json(new AboutResource($about), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, About $about)
    {

        $image = $about->image;

        if($request->hasFile('image'))
        {
            delete_file_if_exist($image);
            $image = upload_file($request->image,'about','about_images');
        }
        $banner = $about->banner;

        if($request->hasFile('banner'))
        {
            delete_file_if_exist($banner);
            $banner = upload_file($request->banner,'about','about_images');
        }

        $about->update( [
            'banner'            => $banner??null,
            'image'             => $image??null,
            'title'             => $request->title,
            'title_array'       => $request->title_array??null,
            'description'       => $request->description,
            'description_array' => $request->description_array??null,
        ]);

        return response()->json(new AboutResource($about), 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->deleteWithTranslations();
        return response()->json(null, 204);
    }
}
