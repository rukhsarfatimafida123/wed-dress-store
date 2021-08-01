<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'product';
	protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = ['name','description', 'price','image','brand_id', 'cat_id'];
}
