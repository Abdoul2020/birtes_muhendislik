<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tripadvisor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'place_id',
        'comments',
        'images',
        'comment_date',
    ];
    public function place()
    {
        return $this->belongsTo(Place::class, 'place_id');
    }


}
