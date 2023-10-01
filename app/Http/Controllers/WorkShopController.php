<?php

namespace App\Http\Controllers;

use App\Models\WorkShop;
use App\Http\Requests\StoreWorkShopRequest;
use App\Http\Requests\UpdateWorkShopRequest;
use App\Http\Resources\WorkShopImageResource;
use App\Http\Resources\WorkShopResource;
use App\Models\WorkShopImage;

class WorkShopController extends Controller
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

        $workShop = WorkShop::get();
        return WorkShopResource::collection($workShop);

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkShopRequest $request)
    {
        if($request->hasFile('banner')){
            $banner = upload_file($request->banner,'work_shops','work_shops_banners');
        }
        $workShop = WorkShop::createWithTranslations([
            'title'             => $request->title,
            'title_array'       => $request->title_array??null,
            'description'       => $request->description,
            'description_array' => $request->description_array??null,
            'type'             => $request->type,
            'banner'             => $banner??null,
        ]);
        return response()->json(new WorkShopResource($workShop), 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkShop $workshop)
    {
        $workshop->loadTranslations();
        return response()->json(new WorkShopResource($workshop), 200);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkShopRequest $request, WorkShop $workshop)
    {
        $banner = $workshop->banner;

        if($request->hasFile('banner'))
        {
            delete_file_if_exist($banner);
            $banner = upload_file($request->banner,'workShop','workShop_banners');
        }
        $workshop->updateWithTranslations( [
            'title'             => $request->title,
            'title_array'       => $request->title_array??null,
            'description'       => $request->description,
            'description_array' => $request->description_array??null,
            'type'             => $request->type,
            'banner'             => $banner??null,

        ]);

        return response()->json(new WorkShopResource($workshop), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkShop $workshop)
    {
        $workshop->deleteWithTranslations();
        return response()->json(null, 204);
    }
}
