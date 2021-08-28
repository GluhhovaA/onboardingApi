<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'phone', 'position', 'description', 'photo', 'user_identifier', 'interest_id',
    ];

    public function userInterests()
    {
        return $this->hasMany('App\UserInterest::class');
    }

}
