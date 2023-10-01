<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory , HasTranslation;

    protected $fillable = [
        'element_id',
        'element_type',
        'type',
        'file'
    ];


    public function element()
    {
        return $this->morphTo();
    }
}
