<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title', 'content', 'article_title', 'article_content', 'file', 'link', 'status',
    ];

    public $timestamps = false;
}
