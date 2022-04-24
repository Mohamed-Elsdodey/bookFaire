<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   function author()
   {
       return $this->belongsTo('App\Author');
   }
}
