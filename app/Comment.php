<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body',
        'user_id',
        'commentable_id',
        'commentable_type',
        'url'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

}
