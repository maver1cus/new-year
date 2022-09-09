<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = ['height', 'article', 'percent', 'price_low', 'price_old_low', 'price_middle', 'price_old_middle', 'price_high', 'price_old_high', 'product_id'];

    public function label() {
        return $this->hasOne(Label::class);
    }
}
