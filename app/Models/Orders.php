<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'order';
	protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = ['card_number','cvc','expiry_date','cardholder_name','address','customer_id','total_price','discount'];
	public function user(){
		return $this->belongsTo('App\\User','customer_id','id');
	}
}
