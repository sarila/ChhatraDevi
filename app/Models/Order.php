<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() {
    	$this->belongsTo(User::class);
    }

    public function getStatusAttribute($status) {
    	if($status == 0)
    	{
    		return "Pending Order";
    	} elseif ($status == 1) {
    		return "Completed Order";
    	}
    }

    public function getPaymentProcessAttribute($payment_process) {
        if($payment_process == 0)
        {
            return "Cash On Delivery";
        }
    }
}
