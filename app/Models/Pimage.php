<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pimage extends Model
{
    use HasFactory;

    protected $table = 'pimages';

	protected $guarded = [];

    use HasFactory;

    public function product(){
    	return $this->belongsTo(Product::class);
    }
}
