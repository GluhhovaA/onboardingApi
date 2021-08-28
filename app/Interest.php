<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public function userInterests()
    {
        return $this->hasMany('App\UserInterest::class');
    }
}
