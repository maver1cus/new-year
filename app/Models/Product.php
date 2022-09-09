<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'title_heading', 'prices'];
    protected $hidden = ['created_at', 'updated_at'];


    public function prices() {
        return $this->hasMany(Price::class);
    }

    public function images() {
        return $this->belongsToMany(Image::class);
    }
}
