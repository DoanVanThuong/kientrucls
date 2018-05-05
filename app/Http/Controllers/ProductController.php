<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\CategoryProductQModel;

class ProductController extends Controller
{
    function ViewProductDetail($slug) {

        $id = CategoryProductQModel::get_id_news($slug);
        $dataProduct = CategoryProductQModel::getProductById($id)->first();
        $categoryName = CategoryProductQModel::getCategoryName($dataProduct->category_id);
        $relativeProduct = CategoryProductQModel::getProduct($dataProduct->category_id);
        return view('pages.product_detail', [
            'dataProduct' => $dataProduct,
            'categoryName' =>$categoryName,
            'relativeProduct' =>$relativeProduct
        ]);
    }
}
