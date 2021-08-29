<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
