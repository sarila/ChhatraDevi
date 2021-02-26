<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Setting extends Model
{
    protected $table ='settings';
    protected $guarded = [];
    use HasFactory;
    use Notifiable;
}
