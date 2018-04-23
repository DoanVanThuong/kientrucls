<?php

namespace App\Http\Models\adminModels;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
   protected $table = 'customers';
   
   public static function getTableName(){
        return with(new static)->getTable();
    }    
}
