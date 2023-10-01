<?php

namespace App\Http\Resources;

use App\Models\WorkShopImage;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WorkShopResource extends JsonResource
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
            'title'            => $this->title,
            'title_array'      => $this->title_array??null,
            'description'      => $this->description,
            'description_array'=> $this->description_array??null,
            'type'             => $this->type,
            'banner'             => $this->banner,
            'image'            => WorkShopImageResource::collection($this->workshopimageser),
        ];
    }
}
