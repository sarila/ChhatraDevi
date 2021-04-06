<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $table = "events";

	protected $guarded = [];
	
    use HasFactory;

    public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function gallery()
	{
		return $this->belongsTo(Gallery::class);
	}

	public function getStatusAttribute($status)
	{
		if ($status == 1) {
			return "Upcoming Event";
		} elseif ($status == 0) {
			return "Past Event";
		}
	}
}
