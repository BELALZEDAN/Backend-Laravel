<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'id'                   => $this->id,
            'phone'                 => $this->phone,
            'email'                 => $this->email,
            'gmail'                 => $this->gmail,
            'lat'                 => $this->lat,
            'lag'                 => $this->lag,
            'mobile'                 => $this->mobile,
            'fax'                 => $this->fax,
            'work_time'                 => $this->work_time,
        ];
    }
}
