<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	public function projects() {
		$this->belongsToMany('App\Project');
	}
}
