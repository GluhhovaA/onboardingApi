<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterestUser extends Model
{
    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = ['user_id', 'interest_id'];
}
