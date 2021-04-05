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

	public function getPaymentMethodAttribute ($payment_method)
	{
		if ($payment_method == 0) {
			return "Cash Donation";
		}
		if ($payment_method == 1) {
			return "E-Sewa" ;
		}
		if($payment_method == 2) {
			return "Fone Pay";
		}
		if($payment_method == 3) {
			return "Khalti";
		}

	}

	public function getStatusAttribute ($status) {
		if($status == 0){
			return "Not Verified";
		}
		if($status == 1) {
			return "Verified";
		}
	}
}
