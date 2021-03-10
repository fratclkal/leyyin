<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiniSlider extends Model
{
    use HasFactory;

    protected $table = 'mini_sliders';
    protected $guarded = [
        'id'
    ];
}
