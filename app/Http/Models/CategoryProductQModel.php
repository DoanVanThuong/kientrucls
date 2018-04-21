<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class CategoryProductQModel extends Model {

    public static function getCategoryProduct($number) {
        return DB::table('categories as c')
        ->select('c.name', 'c.img', 'c.description','c.slug', 'c.type')
        ->take($number)
        ->get();
    }

    public static function getProduct($category_id) {
        return DB::table('products as p')
        ->select('p.*')
        ->where('category_id', $category_id )
        ->get();
    }
    public static function getCategoryName($category_id) {
        $data = DB::table('categories as c')
         ->where('id', $category_id)
        ->first();
        return $data->name;
    }
   
    public static function getProductById($id) {
        return DB::table('products as p')
        ->select('p.*')
        ->where( 'id', $id)
        ->get();
    }

    public static function get_id_news($slug) {
        $data = DB::table('products')
        ->where('slug',$slug)
        ->first();
        return $data->id;
    }
    

}




?>