<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
	use HasFactory;

	use HasTranslations;

	public $translatable = ['title'];

	// Relationship with Quote
	public function quote()
	{
		return $this->hasMany(Quote::class);
	}
}
