<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model

{
protected $fillable=[
    'time_written','context',
    'author_id','post_id'
];   //
}
