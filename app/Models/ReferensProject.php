<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReferensProject extends Model
{
    use HasFactory;

    protected $hidden = ['created_by', 'updated_by', 'deleted_by', 'created_at', 'updated_at', 'deleted_at'];

    protected $table = 'referens_project';

    protected $fillable = [
        'status',
        'order',
        'place_id',
        'title',
        'slug',
        'start',
        'description',
        'duration',
        'level',
        'person',
        'poster',
        'banner',
        'main_referens_id',
        'is_veren_company',
        'text_picture',
        'created_by',
        'updated_by',
        'deleted_by',
        'seo_title',
        'seo_keywords',
        'seo_description',
        'baslangic_tarihi',
        'bitis_tarihi',
        'ilgili_kurum',
        'proje_kapsami',
        'yer',
    ];

    //    protected $with = ['place','hour','price'];
    protected $casts = [
        'created_at' => 'date:d-m-Y',
        'baslangic_tarihi' => 'datetime',
        'bitis_tarihi' => 'datetime',
    ];
    /**
     * Narrator info relation to user model
     *
     * @return BelongsTo
     */
    public function place(): BelongsTo
    {
        return $this->BelongsTo(Place::class);
    }
    public function reservation(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    public function price(): hasMany
    {
        return $this->hasMany(Price::class);
    }

    public function hour(): hasMany
    {
        return $this->hasMany(Hour::class);
    }

    public function faqs(): hasMany
    {
        return $this->hasMany(FAQ::class);
    }



    public function scopeStatus($query){
        return $query->where('status', 1);
    }

    public function scopeDubaiRooms($query){
        return $query->where('place_id', 1);
    }

    public function scopeAbudhabiRooms($query){
        return $query->where('place_id', 2);
    }
    public function room()
    {
        return $this->belongsTo(MainCategory::class);
    }

    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class, 'main_referens_id');
    }
}
