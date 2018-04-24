<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class BaseModel extends Model { 
    public static function getAddress() {
        return DB::table('contact as c')
        ->select('c.*')
        ->get();
    }

    public static function getAbout() {
        return DB::table('about as a')
        ->select('a.title', 'a.content')
        ->get();
    }

  public static function getNews($number) {
    return DB::table('news as n')
    ->select('n.*')
    ->take($number)
    ->limit($number)
    ->orderBy('id')
    ->get();
  }
}
?>