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
        $category = CategoryProductQModel::getCategoryProduct(6);
        $news = BaseModel::getNews(2);
        View()->share([
            'address' => $address,
            'about' => $about,
            'category' =>$category,
            'news_provide' => $news
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
