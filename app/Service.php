<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
     function data(){
          return $this->hasMany(Service::class,'service_id','id');
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

    function parent() {
        return $this->belongsTo(Service::class,'service_id','id');
    }
    function allParent() {
        $parents = collect();
        $this->allParentRec($this, $parents);
        return $parents;
    }
    
    function allParentRec($service, &$parents) {
        if ($service->parent) {
            $parents->push($service->parent()->select('title','slug')->first());
            $this->allParentRec($service->parent, $parents);
        }
    }

    function child() {
        return $this->hasMany(Service::class,'service_id','id');
    }

    function fullSlug()
    {
        $slugs = [];
        $this->fullSlugRec($this, $slugs);
        return implode('/',array_reverse($slugs));
    }
    function fullSlugRec($service, &$slug)
    {
        $slug[] = $service->slug;
        if (isset($service->parent)) {
            $this->fullSlugRec($service->parent, $slug);
        }
    }
}
