<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory, HasTranslation;
    protected $fillable = [
        'image',
        'phone',
        'email',
        'role'
    ];

    protected $translated_columns = ['title'];
}
