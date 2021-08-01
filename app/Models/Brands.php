<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = 'brand';
	protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = ['name','description'];
}
