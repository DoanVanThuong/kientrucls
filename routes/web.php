<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@TrangChu');

Route::get('gioi-thieu', 'PageController@GioiThieu');
Route::get('lien-he', function() {
    return view('pages/contact');
});

Route::get('san-pham', 'PageController@SanPham');
Route::get('chitiet', function(){
return view('pages.product_detail');
});
Route::get('bo-suu-tap', 'PageController@DuAn');

