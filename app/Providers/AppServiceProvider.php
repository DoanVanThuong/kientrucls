<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Models\BaseModel;
use App\Http\Models\CategoryProductQModel;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //chia se du lieu contact tat ca cac trang
        $address = BaseModel::getAddress();
        $about =  BaseModel::getAbout()->first();
        $category = CategoryProductQModel::getCategoryProduct();
        $news = BaseModel::getNews(2);
        View()->share([
            'address' => $address,
            'about' => $about,
            'category' =>$category,
            'news' => $news
            ]);

            
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
