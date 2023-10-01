<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
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
            'id'                   => $this->id,
            'image'                 => $this->image,
            'banner'                => $this->banner,
            'title'            => $this->title,
            'title_array'      => $this->title_array??null,
            'description'      => $this->description,
            'description_array'=> $this->description_array??null,
        ];
    }
}
