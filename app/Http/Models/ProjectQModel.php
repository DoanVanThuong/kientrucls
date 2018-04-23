<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class ProjectQModel extends Model {

    public static function getProject($num) {
        return DB::table('projects as p')
        ->select('p.*')
        ->take($num)
        ->orderBy('id','created_at')
        ->get();
    }

    public static function getFeedBack($num) {
        return DB::table('feedback as f')
        ->select('f.customer', 'f.content' , 'f.id','f.img')
        ->take($num)
        ->get();
    }

    public static function getLogoCustomer() {
        return DB::table('customers as c')
        ->select('c.*')
        ->get();
    }

    public static function getProjectByCategory($cat) {
        return DB::table('gallery as g')
        ->select('g.img','g.id','g.name')
        ->where('category_id', $cat)
        ->get();
    }

 

}




?>