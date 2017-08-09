<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Podcast;
use Illuminate\Support\Facades\App;
use App\Keyboard;

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

    public function podcasts()
    {
        return $this->belongsToMany(Podcast::class);
    }

    public function fruits()
    {
        return $this->belongsToMany(Fruit::class);
    }

    public function keyboards()
    {
        return $this->belongsToMany(Keyboard::class);
    }
}
