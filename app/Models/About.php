<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'place_id',
        'about_Text',

    ];
    public function place()
    {
        return $this->belongsTo(Place::class, 'place_id');
    }}
