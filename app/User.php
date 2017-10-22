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


    public function notifications(){
        return $this->hasMany('App\Notification');
    }
    public function photos(){
        return $this->hasMany('App\Photos');
    }
    public function bookmarks(){
        return $this->hasMany('App\Bookmark');
    }
    public function reviews(){
        return $this->hasMany('App\Reviews');
    }
}