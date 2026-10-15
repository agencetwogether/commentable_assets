<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Tilto\Commentable\Contracts\Commentable;
use Tilto\Commentable\Traits\HasComments;

class Post extends Model implements Commentable
{
    use HasComments;

    protected $fillable = [
        'title',
        'body',
    ];
}
