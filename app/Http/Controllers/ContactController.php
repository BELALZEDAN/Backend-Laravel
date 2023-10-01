<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Http\Resources\ContactResource;

class ContactController extends Controller
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
        $contact = Contact::get();
        return ContactResource::collection($contact);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create([
            'phone' => $request->phone,
            'email' => $request->email,
            'gmail' => $request->gmail,
            'fax' => $request->fax,
            'mobile' => $request->mobile,
            'lag' => $request->lag,
            'lat' => $request->lat,
            'work_time' => json_encode($request->work_time),
        ]);

        return response()->json(new ContactResource($contact),200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return response()->json(new ContactResource($contact),200);

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $contact->update( [
            'phone' => $request->phone ?? $contact->phone,
            'email' => $request->email ?? $contact->email,
            'gmail' => $request->gmail ?? $contact->gmail,
            'fax' => $request->fax ?? $contact->fax,
            'mobile' => $request->mobile ?? $contact->mobile,
            'lag' => $request->lag ?? $contact->lag,
            'lat' => $request->lat ?? $contact->lat,
            'work_time' => $request->work_time  ?? $contact->work_time,
        ]);

        return response()->json(new ContactResource($contact), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

    }
}
