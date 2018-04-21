<?php
namespace App\Http\Models\adminModels;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class TinTuc extends Model
{
   //khi báo tên bảng
   protected  $table = "news";
    //tên bảng
   public static function getTableName(){
       return with(new static)->getTable();
   }
}
