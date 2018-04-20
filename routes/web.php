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

Route::get('bo-suu-tap', 'PageController@DuAn');
//sản phẩm
Route::group(['prefix' =>'san-pham'] ,function(){
	Route::get('/','PageController@SanPham');
	Route::get('/{slug}','ProductController@ViewProductDetail');
});
//tin tức
Route::group(['prefix' =>'tin-tuc'] ,function(){
	Route::get('/','PageController@TinTuc');
	Route::get('/{slug}','NewsController@ViewNewsDetail');
});
//adimin
Route::group(['prefix' =>'admin'], function(){
    Route::group(['prefix'=>'loaisanpham'] , function(){
        Route::get('/danhsach','AdminControllers\LoaiSanPhamController@getDanhSach');
        Route::get('/them','AdminControllers\LoaiSanPhamController@getThem');
        Route::post('/them','AdminControllers\LoaiSanPhamController@postThem');
        Route::get('/sua/{id}','AdminControllers\LoaiSanPhamController@getSua');
        Route::post('/sua/{id}','AdminControllers\LoaiSanPhamController@postSua');		
        Route::get('/xoa/{id}','AdminControllers\LoaiSanPhamController@getXoa');
    });
});