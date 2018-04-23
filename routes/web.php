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
    Route::group(['prefix'=>'sanpham'] , function(){
        Route::get('/danhsach','AdminControllers\SanPhamController@getDanhSach');
        Route::get('/them','AdminControllers\SanPhamController@getThem');
        Route::post('/them','AdminControllers\SanPhamController@postThem');
        Route::get('/sua/{id}','AdminControllers\SanPhamController@getSua');
        Route::post('/sua/{id}','AdminControllers\SanPhamController@postSua');		
        Route::get('/xoa/{id}','AdminControllers\SanPhamController@getXoa');
    });
    Route::group(['prefix'=>'tintuc'] , function(){
        Route::get('/danhsach','AdminControllers\TinTucController@getDanhSach');
        Route::get('/them','AdminControllers\TinTucController@getThem');
        Route::post('/them','AdminControllers\TinTucController@postThem');
        Route::get('/sua/{id}','AdminControllers\TinTucController@getSua');
        Route::post('/sua/{id}','AdminControllers\TinTucController@postSua');		
        Route::get('/xoa/{id}','AdminControllers\TinTucController@getXoa');
    });
    Route::group(['prefix'=>'duan'] , function(){
        Route::get('/danhsach','AdminControllers\DuAnController@getDanhSach');
        Route::get('/them','AdminControllers\DuAnController@getDanhSach');
        Route::post('/them','AdminControllers\DuAnController@postThem');
        Route::get('/sua/{id}','AdminControllers\DuAnController@getSua');
        Route::post('/sua/{id}','AdminControllers\DuAnController@postSua');		
        Route::get('/xoa/{id}','AdminControllers\DuAnController@getXoa');
    });
    Route::group(['prefix'=>'loaiduan'] , function(){
        Route::get('/danhsach','AdminControllers\LoaiDuAnController@getDanhSach');
        Route::get('/them','AdminControllers\LoaiDuAnController@getDanhSach');
        Route::post('/them','AdminControllers\LoaiDuAnController@postThem');
        Route::get('/sua/{id}','AdminControllers\LoaiDuAnController@getSua');
        Route::post('/sua/{id}','AdminControllers\LoaiDuAnController@postSua');		
        Route::get('/xoa/{id}','AdminControllers\LoaiDuAnController@getXoa');
    });
});

// Route::get('admin', function(){
//     return view('adminls.loaisanpham.danhsach');
// });