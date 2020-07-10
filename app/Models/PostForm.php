<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostForm extends Model
{
    Public function user()
  {
    return $this->belongsTo('App\User');
  }
}
