<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $guarded = [];
    use HasFactory;

    public function getNewsTypeAttribute($news_type) {
    	if ($news_type == 0) {
    		return "Article";
    	}
    	if ($news_type == 1) {
    		return "Media Coverage";
    	}
    }
}
