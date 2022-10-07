<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Campaign extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;

    protected $dates = ['from', 'to'];
    protected $fillable = ['name', 'from', 'to', 'total', 'daily_budget'];

    protected $casts = [
        'from' => 'date:d-m-Y',
        'to' => 'date:d-m-Y'
    ];
}
