<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class MenuQModel extends Model {

public static function getMenu($id) {
    return DB::table('menu as m')
    ->where('m.category_id',$id)
    ->get() ;
    
}



}




?>