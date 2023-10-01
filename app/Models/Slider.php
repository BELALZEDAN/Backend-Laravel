<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory, HasTranslation;
    protected $fillable = [
        'image',
    ];

    protected $translated_columns = ['title','description'];
}
