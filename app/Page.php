<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Page extends Model
{
    function modules() {
        return $this->belongsToMany(Module::class,"page_modules",'page_id','module_id');
     }

     function pages() {
        return $this->hasMany(Page::class,'top_page');
     }

     function top() {
        return $this->belongsTo(Page::class,'top_page');
     }

     function allPages() {
        return $this->top()->with('pages')->get();
     }

     function data() {
        $page = $this->belongsTo(\TCG\Voyager\Models\DataType::class,'table','id')->first();
        if(empty($page)) return null;
        $data = app($page->model_name);
        if($this->parameters != null){
            foreach (json_decode($this->parameters) as $key => $value) {
                if(Schema::hasColumn(app($page->model_name)->getTable(),$key)){
                    $data = $data->where($key,$value);
                }
            }
        }
        if(method_exists(app($page->model_name), 'scopeOrder')) {
            $data = $data->order();
        }else if(Schema::hasColumn(app($page->model_name)->getTable(), 'ordering')) {
            $data = $data->orderBy('ordering');
            $data = $data->orderBy('id','desc');
        }else{
            $data = $data->orderBy('id','desc');
        }
        $data = $data->get();
        if(empty($data)) return false;
        return $data;
    }

    function allParent() {
        $parents = collect();
        $this->allParentRec($this, $parents);
        return $parents;
    }
    
    function allParentRec($service, &$parents) {
        if ($service->top) {
            $parents->push($service->top()->select('title','slug')->first());
            $this->allParentRec($service->top, $parents);
        }
    }
    function fullSlug()
    {
        $slugs = [];
        $this->fullSlugRec($this, $slugs);
        return implode('/',array_reverse($slugs));
    }
    function fullSlugRec($page, &$slug)
    {
        $slug[] = $page->slug;
        if (isset($page->top)) {
            $this->fullSlugRec($page->top, $slug);
        }
    }
}
