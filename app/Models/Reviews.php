<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table = 'review';
	protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = ['rating','comment','product_id','customer_id'];
}
