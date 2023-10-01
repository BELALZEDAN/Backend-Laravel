<?php

namespace App\Http\Controllers;

use App\Models\WorkShopImage;
use App\Http\Requests\StoreWorkShopImageRequest;
use App\Http\Requests\UpdateWorkShopImageRequest;
use App\Http\Resources\WorkShopImageResource;

class WorkShopImageController extends Controller
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
        $workShopImage = WorkShopImage::get();
        return WorkShopImageResource::collection($workShopImage);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkShopImageRequest $request)
    {

        if($request->hasFile('image')){
            $image = upload_array_file($request->image,'workShopImage','workShopImage');
        }
        $images = array();
        foreach ( $image  as $key => $value) {
            $gallery = WorkShopImage::create(['image'=>$value , 'workshop_id'             => $request->workshop_id,
        ]);
            array_push($images,$gallery);
        }
    return WorkShopImageResource::collection($images);
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkShopImage $workshopimage)
    {
        return response()->json(new WorkShopImageResource($workshopimage), 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkShopImageRequest $request, WorkShopImage $workshopimage)
    {
        $image = $workshopimage->image;

        if($request->hasFile('image'))
        {
            delete_file_if_exist($image);
            $image = upload_array_file($request->image,'workShopImage','workShopImage');
        }
        $images = array();
        foreach ( $image  as $key => $value) {
            $workshopimage->update(['image'=>$value, 'workshop_id'             => $request->workshop_id,]);
            array_push($images,$workshopimage);
        }
    return WorkShopImageResource::collection($images);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkShopImage $workshopimage)
    {
        delete_file_if_exist($workshopimage->image);
        $workshopimage->delete();
        return response()->json(null, 204);
    }
}
