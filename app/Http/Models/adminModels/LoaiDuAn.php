<?php

namespace App\Http\Models\adminModels;

use Illuminate\Database\Eloquent\Model;

class LoaiDuAn extends Model
{
   protected $table = 'project_category';

   public function duan()
   {
       return $this->hasMany('App\Http\Models\adminModels\DuAn','category_id' ,'id');
   }

   public static function getTableName(){
       return with(new static)->getTable();
   }
}
