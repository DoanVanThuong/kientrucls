<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class CategoryProductQModel extends Model {

    public static function getCategoryProduct() {
        return DB::table('categories as c')
        ->select('c.name', 'c.img', 'c.description','c.slug', 'c.type')
        ->get();
    }

    public static function getProduct($category_id) {
        return DB::table('products as p')
        ->select('p.*')
        ->where('category_id', $category_id)
        ->get();
    }
    

}




?>