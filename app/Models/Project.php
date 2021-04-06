<?php

namespace App\Models;

use App\Models\Donation;
use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = "projects";

    protected $guarded = [];

    public function gallery()
	{
		return $this->belongsTo(Gallery::class);
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function donations()
	{
		return $this->hasMany(Donation::class);
	}

	public function getStatusAttribute ($status) {
		if ($status == 0) {
			return "Ongoing Project";
		} elseif ($status == 1) {
			return "Completed Project";
		}
	}
}
