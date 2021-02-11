<?php

namespace App\Models;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'categories';
	protected $fillable = [
		'category_name',
		'slug',
	];
    use HasFactory;

    public function galleries(){
    	return $this->hasMany(Gallery::class);
    }
}
