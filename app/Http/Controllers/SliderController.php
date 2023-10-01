<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Http\Resources\SliderResource;

class SliderController extends Controller
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
        $slider = Slider::get();
        return SliderResource::collection($slider);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request)
    {
        if($request->hasFile('image')){
            $image = upload_file($request->image,'slider','slider_images');
        }
        $slider = Slider::createWithTranslations([
            'image'             => $image??null,
            'title'             => $request->title,
            'title_array'       => $request->title_array??null,
            'description'       => $request->description,
            'description_array' => $request->description_array??null,
        ]);
        return response()->json(new SliderResource($slider), 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        $slider->loadTranslations();
        return response()->json(new SliderResource($slider), 200);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $image = $slider->image;

        if($request->hasFile('image'))
        {
            delete_file_if_exist($image);
            $image = upload_file($request->image,'slider','slider_images');
        }


        $slider->updateWithTranslations( [
            'image'             => $image??null,
            'title'             => $request->title,
            'title_array'       => $request->title_array??null,
            'description'       => $request->description,
            'description_array' => $request->description_array??null,
        ]);

        return response()->json(new SliderResource($slider), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->deleteWithTranslations();
        return response()->json(null, 204);
    }
}
