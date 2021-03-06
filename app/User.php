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
        'name', 'email', 'password', 'verify_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'email', 'verify_token', 'verified', 'invite'
    ];

    public function projects() {
	    return $this->hasMany('App\Project');
    }

    public function roles() {
        return $this->belongsToMany('App\Role');
    }

    public function likes() {
        return $this->hasMany('App\Like');
    }

    public function galleries() {
        return $this->hasMany('App\Gallery');
    }

    public function authorizeRoles($roles) {
        return $this->hasAnyRole($roles) || abort(401, "This action is unauthorized");
    }

    public function hasAnyRole($roles) {
        if(is_array($roles)) {
            return $this->roles()->whereIn('name', $roles)->exists();
        }
        return $this->roles()->where('name', $roles)->exists();
    }
}
