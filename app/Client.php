<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Client extends Model
{
 public function scopeOrder($query)
 {
     return $query->orderBy('ordering')->orderBy('id','desc')->orderBy('title','ASC');
 }
}
