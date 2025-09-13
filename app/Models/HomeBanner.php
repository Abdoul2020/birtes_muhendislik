<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
    use HasFactory;

    protected $table = 'homebanner';

    protected $fillable = ['name', 'placefor', 'room_id', 'photos_img', 'videos_mp4'];



    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
