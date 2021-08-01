<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
	protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = ['amount','payment_type','order_id','customer_id'];
}
