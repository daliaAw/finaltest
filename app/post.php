<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable=[
        'title','time_written','context',
        'featured_image','vote_up','vote_down',
        'author_id','category_id'
    ];
}
