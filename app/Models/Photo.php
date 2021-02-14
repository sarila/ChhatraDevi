<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;

class Photo extends Model
{
    use HasFactory;
    protected $table = 'photos';

	protected $guarded = [];

    use HasFactory;

    public function gallery(){
    	return $this->belongsTo(Gallery::class);
    }
}
