<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Page extends Model
{
    function modules() {
        return $this->belongsToMany(Module::class,"page_modules",'page_id','module_id');
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
        
        if(Schema::hasColumn(app($page->model_name)->getTable(), 'ordering')) {
            $data = $data->orderBy('ordering');
        }
        $data = $data->orderBy('id','desc');
        $data = $data->get();
        if(empty($data)) return false;
        return $data;
    }
}
