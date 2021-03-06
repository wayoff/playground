<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
    	'name',
		'description',
		'active',
		'parent_id',
    ];

    public function parent()
    {
    	return $this->hasOne(Category::class, 'parent_id');
    }

    public function children()
    {
    	return $this->hasMany(Category::class, 'parent_id');
    }
}
