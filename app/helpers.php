<?php

use App\Http\Resources\MediaResource;
use App\Models\Media;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Database\Eloquent\Model;

if (!function_exists('to_user')) {
    function to_user($user): ?User
    {
        return $user;
    }
}

if (!function_exists('to_token')) {
    function to_token($token): ?PersonalAccessToken
    {
        return $token;
    }
}

if (!function_exists('upload_file')) {
    function upload_file($request_file, $prefix, $folder_name)
    {
        $extension = $request_file->getClientOriginalExtension();
        $file_to_store = $prefix . '_' . time() . '.' . $extension;
        $request_file->storeAs('public/' . $folder_name, $file_to_store);
        return $folder_name . '/' . $file_to_store;
    }
}
if (!function_exists('upload_array_file')) {
    function upload_array_file($request_file, $prefix, $folder_name)
    {
        $images = array();
        foreach ($request_file as $key => $value) {
            $extension = $value->getClientOriginalExtension();
            $file_to_store = $prefix . '_' . time(). $key . '.' . $extension;
            $value->storeAs('public/' . $folder_name, $file_to_store);
            array_push($images,$folder_name . '/' . $file_to_store);
                  }
        return $images;
    }
}

if (!function_exists('delete_file_if_exist')) {
    function delete_file_if_exist($file)
    {
        if (Storage::exists('public/' . $file))
            Storage::delete('public/' . $file);
    }
}

if (!function_exists("haversineGreatCircleDistance")) {
    function haversineGreatCircleDistance(
        $latitudeFrom,
        $longitudeFrom,
        $latitudeTo,
        $longitudeTo,
        $earthRadius = 6371000
    ) {
        // convert from degrees to radians
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return $angle * $earthRadius;
    }
}

if (!function_exists(('add_media'))) {
    function add_media($model, $model_name, $file_name, $request)
    {
        $request->validate([
            'type'   => ['required', 'in:image,video,pdf'],
        ]);

        if ($request->type == 'image')
            $request->validate([
                'file'   => ['required', 'mimes:png,jpg,jpeg,gif'],
            ]);
        elseif ($request->type == 'video')
            $request->validate([
                'file'   => ['required', 'mimes:mp4,ogx,oga,ogv,ogg,webm'],
            ]);
        elseif ($request->type == 'pdf')
            $request->validate([
                'file'   => ['required', 'mimes:pdf'],
            ]);

        $file = upload_file($request->file, $file_name, $file_name . 's_media');
        $media = new Media([
            'type'          => $request->type,
            'file'          => $file,
            'element_type'  => $model_name,
            'element_id'    => $model->id,
        ]);

        $media->save();
        return response()->json(new MediaResource($media), 200);
    }
    if (!function_exists('error_processor')) {
        function error_processor($validator)
        {
            $err_keeper = [];
            foreach ($validator->errors()->getMessages() as $index => $error) {
                array_push($err_keeper, ['code' => $index, 'message' => $error[0]]);
            }
            return $err_keeper;
        }
    }
}
