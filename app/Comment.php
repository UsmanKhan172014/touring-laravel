<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    public function blogs()
    {
        return $this->morphTo('App\Blog');
    }

    public function replies()
    {
        return $this->hasMany('App\Comment','parent_id');
    }
}
