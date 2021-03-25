<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\Pimage;
use App\Models\Pcategory;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['discounted_price'];

    public function tags() 
    {
    	return $this->morphTOMany(Tag::class, 'taggable');
    }

    public function pimages()
    {
    	return $this->hasMany(Pimage::class);
    }

    public function pcategory()
    {
        return $this->belongsTo(Pcategory::class,'pcategory_id');
    }

    public function getDiscountedPriceAttribute()
    {
        if ($this->discount_type == 0) {
            return $this->price;
        }
        elseif ($this->discount_type == 1) {
            return $this->price-$this->discount;
        }
        elseif ($this->discount_type == 2) {
            return $this->price - ($this->discount/100)*$this->price;
        }
    }
}