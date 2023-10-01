<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Http\Resources\ServiceResource;

class ServiceController extends Controller
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
        $service = Service::get();
        return ServiceResource::collection($service);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        if($request->hasFile('image')){
            $image = upload_file($request->image,'service','service');
        }
        $service = Service::createWithTranslations([
            'image'             => $image??null,
            'title'             => $request->title,
            'title_array'       => $request->title_array??null,
            'description'       => $request->description,
            'description_array' => $request->description_array??null,
        ]);
        return response()->json(new ServiceResource($service), 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {

        $service->loadTranslations();
        return response()->json(new ServiceResource($service), 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {

        $image = $service->image;

        if($request->hasFile('image'))
        {
            delete_file_if_exist($image);
            $image = upload_file($request->image,'service','service');
        }


        $service->updateWithTranslations( [
            'image'             => $image??null,
            'title'             => $request->title,
            'title_array'       => $request->title_array??null,
            'description'       => $request->description,
            'description_array' => $request->description_array??null,
        ]);

        return response()->json(new ServiceResource($service), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->deleteWithTranslations();
        return response()->json(null, 204);
    }
}
