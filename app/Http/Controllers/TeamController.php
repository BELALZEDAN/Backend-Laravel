<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Http\Resources\TeamResource;

class TeamController extends Controller
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
        $team = Team::get();
        return TeamResource::collection($team);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        if($request->hasFile('image')){
            $image = upload_file($request->image,'team','team_images');
        }
        $team = Team::createWithTranslations([
            'email'            => $request->email,
            'phone'            => $request->phone,
            'image'             => $image??null,
            'title'             => $request->title,
            'role'              => $request->role,
            'title_array'       => $request->title_array??null,

        ]);
        return response()->json(new TeamResource($team), 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        $team->loadTranslations();
        return response()->json(new TeamResource($team), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        $image = $team->image;

        if($request->hasFile('image'))
        {
            delete_file_if_exist($image);
            $image = upload_file($request->image,'team','team_images');
        }


        $team->updateWithTranslations( [
            'email'            => $request->email ?? $team->email,
            'phone'            => $request->phone ?? $team->phone,
            'image'             => $image ?? $team->image,
            'role'              => $request->role ?? $team->role,
            'title'             => $request->title ?? $team->title,
            'title_array'       => $request->title_array??null,
        ]);

        return response()->json(new TeamResource($team), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $team->deleteWithTranslations();
        return response()->json(null, 204);
    }
}
