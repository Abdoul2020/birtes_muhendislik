<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "about_Text",
        "vision",
        "mision",
        "kvkk",
        "kalite_polic",
        "poster_1",
        "poster_2",
        "poster_3",
        "poster_4",
        "poster_5",
        "poster_6",
        "poster_7",
        "poster_8",

    ];
    public function place()
    {
        return $this->belongsTo(Place::class, 'place_id');
    }
}
