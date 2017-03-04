<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookSave extends Model
{
    protected $table = "books_aves";
    protected $guarded = [];

    public  function book(){
        return $this->belongsTo('App\Book', 'id', 'book_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id', 'user_id');
    }
}
