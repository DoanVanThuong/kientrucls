<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\NewsQModel;
class NewsController extends Controller
{
    function ViewNewsDetail($slug) {
        $id = NewsQModel::get_IDNews_With_Slug($slug);
        $dataNews = NewsQModel::get_News_by_ID($id);
        // dd($dataNews);
        return view('pages.news_detail', [
            'dataNews' => $dataNews
        ]);
    }
}
