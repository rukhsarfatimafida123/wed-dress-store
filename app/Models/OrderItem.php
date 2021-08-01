<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_item';
	protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = ['product_id','order_id','quantity','unit_price'];
}
