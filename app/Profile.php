<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'avatar', 'facebook', 'about', 'youtube', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
