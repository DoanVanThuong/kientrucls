<?php

namespace App\Http\Models\adminModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class DuAn extends Model
{
    protected $table = 'projects';

    public function loaiduan()
    {
    	return $this->belongsTo('App\Http\Models\adminModels\LoaiDuAn','category_id','id');
    }

    public static function getTableName(){
        return with(new static)->getTable();
    }

    public static function counts($id) {
       return  DB::table('projects')->where('category_id',$id)
        ->count();
    }
}
