<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

//    public function replies(){
//    	return $this->hasMany(Review::class, 'parent_id');
//    }
//
}
