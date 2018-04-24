<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\NewsQModel;
class NewsController extends Controller
{
    function ViewNewsDetail($slug) {
        $id = NewsQModel::get_IDNews_With_Slug($slug);
        $dataNews = NewsQModel::get_News_by_ID($id);
        $relativeNews = NewsQModel::get_news_without_paging(4);
        // dd($dataNews);
        return view('pages.news_detail', [
            'dataNews' => $dataNews,
            'relativeNews' =>$relativeNews
        ]);
    }

    
}
