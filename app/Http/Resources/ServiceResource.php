<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $this->loadTranslations();

        return [
            'id'               => $this->id,
            'image'            => $this->image,
            'title'            => $this->title,
            'title_array'      => $this->title_array??null,
            'description'      => $this->description,
            'description_array'=> $this->description_array??null,
        ];
    }
}
