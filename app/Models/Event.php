<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $table = "events";

	protected $guarded = [];
	
    use HasFactory;
}
