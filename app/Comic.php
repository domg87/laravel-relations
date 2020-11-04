<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    public function author()
    {
        return $this->belongsTo('App\Author');
    }
    
}
