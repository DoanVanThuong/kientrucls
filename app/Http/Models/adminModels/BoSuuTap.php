<?php

namespace App\Http\Models\adminModels;

use Illuminate\Database\Eloquent\Model;

class BoSuuTap extends Model
{
    protected $table = 'gallery';

    public function loaiduan()
    {
    	return $this->belongsTo('App\Http\Models\adminModels\LoaiDuAn','category_id','id');
    }

    public static function getTableName(){
        return with(new static)->getTable();
    }

    public static function counts($id) {
       return  DB::table('gallery')->where('category_id',$id)
        ->count();
    }

    public static function getGallery($category_id) {
        return DB::table('gallery')
        ->where('category_id', $category_id)
        ->orderBy('id','created')
        ->get();
    } 

}
