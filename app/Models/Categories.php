<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'category';
	protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = ['name','description'];
}
