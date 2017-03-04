<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";

    protected $guarded = [];

    public function cate(){
        return $this->belongsTo('App\Category', 'id', 'cate_id');
    }

    public function comment(){
        return $this->hasMany('App\Comment', 'id', 'book_id');
    }

    public function book_save(){
        return $this->hasMany('App\BookSave', 'id', 'book_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id', 'user_id');
    }

}
