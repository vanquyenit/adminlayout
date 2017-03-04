<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $guarded = [];

    public function book(){
        return $this->belongsTo('App\Book', 'id', 'book_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id', 'user_id');
    }
}
