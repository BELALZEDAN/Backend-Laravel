<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory, HasTranslation;
    protected $fillable = [
        'image',
        'banner',
    ];

    protected $translated_columns = ['title','description'];
}
