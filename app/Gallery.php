<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function projects() {
		return $this->belongsToMany('App\Project');
	}
}
