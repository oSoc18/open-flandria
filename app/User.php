<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function projects() {
	    return $this->hasMany('App\Project');
    }

    public function roles() {
        return $this->belongsToMany('App\Role');
    }

    public function authorizeRoles($roles) {
        return $this->hasAnyRole($roles) || abort(401, "This action is unauthorized");
    }

    public function hasAnyRole($roles) {
        if(is_array($roles)) {
            return null !== $this->roles()->whereIn(‘name’, $roles)->first();
        }
        return null !== $this->roles()->where(‘name’, $roles)->first();
    }
}
