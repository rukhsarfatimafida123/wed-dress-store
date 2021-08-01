<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tag';
	protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = ['name','description'];
}
