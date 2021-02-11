<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;
    public $folder="user";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'avatar','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function posts()
    {
          return $this->hasMany(Post::class);
       
    }
    public function roles()
    {
          return $this->belongsToMany(Role::class);
       
    }
    public function permissions()
    {
          return $this->belongsToMany(Permission::class);
       
    }
    public function setPasswordAttribute($value)
        {
            $this->attributes['password']= bcrypt($value);
        }
        public function image_path()
        {
            return url(Storage::url($this->folder.'/'.$this->avatar));
        }
    
    public function userHasRole($role_name)
    {
        foreach($this->roles as $role)
        {
            if($role->name==$role_name)
            {
                return true;
            }
            return false;
        }
    }
}
