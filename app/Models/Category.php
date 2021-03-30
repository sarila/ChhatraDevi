<?php

namespace App\Models;

use App\Models\Gallery;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Event;

class Category extends Model
{
	protected $table = 'categories';
	protected $guarded = [];
    use HasFactory;

    public function galleries(){
    	return $this->hasMany(Gallery::class);
    }

    public function projects(){
    	return $this->hasMany(Project::class);
    }

    public function events(){
    	return $this->hasMany(Event::class);
    }
}
