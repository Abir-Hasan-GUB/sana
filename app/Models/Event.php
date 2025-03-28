<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date_time',
        'location',
        'total_seat',
        'about_event',
        'banner',
    ];

    // Relationship with EventGallery
    public function galleries()
    {
        return $this->hasMany(EventGallery::class);
    }
}
