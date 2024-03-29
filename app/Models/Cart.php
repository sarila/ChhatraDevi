<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Cart 
{
	public $items = null;
	public $totalQuantity = 0;	
	public $totalPrice = 0;	

	public function __construct($oldCart)
	{
		if($oldCart)
		{
			$this->items = $oldCart->items;
			$this->totalQuantity = $oldCart->totalQuantity;
			$this->totalPrice = $oldCart->totalPrice;

		}
	}

	public function add($item, $id)
	{
		$storedItem = ['qty' => 0, 'price' => $item->discounted_price, 'item'=> $item];
		if ($this->items) {
			if (array_key_exists($id, $this->items)) {
				$storedItem = $this->items[$id];
			}
		}
		$storedItem['qty']++;
		$storedItem['price'] = $item->discounted_price * $storedItem['qty'];
		$this->items[$id] = $storedItem;
		$this->totalQuantity++;
		$this->totalPrice += $item->discounted_price;
	}


	public function removeItem($id)
	{
		$this->totalQuantity -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
}
