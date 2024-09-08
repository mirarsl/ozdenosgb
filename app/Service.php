<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
     function data(){
          return $this->hasMany(Project::class,'service_id','id');
     }
     
     public function scopeActive($query)
     {
         return $query->where('status', 1);
     }
     
     public function scopeMenu($query)
     {
         return $query->where('show_menu', 1);
     }

     public function scopeOrder($query)
    {
        return $query->orderBy('ordering')->orderBy('id','desc');
    }

    public function scopeTop($query)
    {
        return $query->where('service_id',null);
    }
}
