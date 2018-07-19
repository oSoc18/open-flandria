<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	public function user() {
		return $this->belongsTo('App\User');
	}
	
	public function tags() {
		return $this->belongsToMany('App\Tag');
	}

	public function images() {
		return $this->hasMany('App\Image');
	}

	public function gallery() {
		return $this->belongsToMany('App\Gallery');
	}
}
