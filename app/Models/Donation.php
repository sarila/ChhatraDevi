<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $table = "donations";

    protected $guarded = [];

    public function project()
	{
		return $this->belongsTo(Project::class);
	}
}
