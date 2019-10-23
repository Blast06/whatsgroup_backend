<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public function groups()
    {
        return $this->belongsTo(Group::class);
    }
}