<?php

namespace App\Http\Models\adminModels;

use Illuminate\Database\Eloquent\Model;

class DuAn extends Model
{
    protected $tabl = 'project';

    public function loaiduan()
    {
    	return $this->belongsTo('App\Http\Models\adminModels\LoaiDuAn','category_id','id');
    }

    public static function getTableName(){
        return with(new static)->getTable();
    }

   //TODo COunt project by category_id
}
