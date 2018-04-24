<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class NewsQModel extends Model {
//lấy tin bang so luong
public static function get_news($num){
    return DB::table('news as n')
        ->select('n.*')
        ->take($num)
        ->orderBy('id','date')
        ->paginate($num);
        
}

public static function get_news_without_paging($num){
    return DB::table('news as n')
        ->select('n.*')
        ->take($num)
        ->orderBy('id','date')
        ->get();        
}
//lay tin bang dem
public static function get_news_by_count(){
    return DB::table('news as n')
        ->select('n.*')
        ->orderBy('id','date')
        ->get();

}
//lay tin bang loai tin va so luong
public static function get_news_by_news_category($cat,$num)
{
    return DB::table('news as n')			
        ->select('n.*')
        ->take($num)
        ->where('n.news_category_id' ,$cat)
        ->orderBy('id','date')			
        ->paginate($num);
}
//lấy id của tin tức thông qua slug
public static function get_IDNews_With_Slug($slug)
{
    $text = DB::table('news')
    ->where('slug',$slug)
    ->first();
    return $text->id;
}
//lấy dữ liệu bảng news theo id 
public static function get_News_by_ID($id)
{
    return DB::table('news')
    ->where('id',$id)->first();
}
//lấy id category news
public static function get_category_id($id){
    return DB::table('news as n')
 ->select('n.news_category_id')
 ->where('n.id',$id)
 ->get();
    
}

public static function timkiem($keyword,$num){
    return DB::table('news')
    ->where('name','like','%'.$keyword. '%')
    ->orwhere('sumary','like', '%'.$keyword. '%')
    ->orwhere('content','like','%'.$keyword. '%')
    ->take(10)
    ->paginate($num);
    
}




}




?>