<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'cart_item';
	protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = ['product_id','user_id','quantity','is_active'];
	public function product(){
		return $this->belongsTo('App\\Models\\Products','product_id','id');
	}
}
