<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\CategoryProductQModel;

class ProductController extends Controller
{
    function ViewProductDetail($slug) {
        $id = CategoryProductQModel::get_id_news($slug);
        print($id);
        $dataProduct = CategoryProductQModel::getProductById($id)->first();
        dd($dataProduct);
        // return view('pages.product_detail', [
        //     'id' => $id
        // ]);
    }
}
