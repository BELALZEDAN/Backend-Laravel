<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkShopImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'workshop_id'
    ];
}
