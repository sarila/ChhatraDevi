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
}
