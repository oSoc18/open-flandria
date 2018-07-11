<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	public function projects() {
		return $this->belongsTo('App\Project');
	}
}
