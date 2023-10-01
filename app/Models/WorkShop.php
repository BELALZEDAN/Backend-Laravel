<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkShop extends Model
{
    use HasFactory, HasTranslation;
    protected $fillable = [
        'type',
        'banner',
    ];
    protected $translated_columns = ['title', 'description'];
    public function workshopimageser()
    {
        return $this->hasMany(WorkShopImage::class, 'workshop_id');
    }
}
