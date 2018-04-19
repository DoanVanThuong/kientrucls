<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\MenuQModel;
use App\Http\Models\CategoryProductQModel;
use App\Http\Models\ProjectQModel;
use App\Http\Models\BaseModel;


class PageController extends Controller
{

    function TrangChu() {
        $product = CategoryProductQModel::getCategoryProduct();
        $project = ProjectQModel::getProject(4);
        $feedback = ProjectQModel::getFeedback(3);
        $logo = ProjectQModel::getLogoCustomer();

       return view('pages.index', [
           'product' => $product,
           'project' => $project,
           'feedback' => $feedback,
           'logo' => $logo,
           ]);
    }

    function GioiThieu() {
        $about = BaseModel::getAbout()->first();
        return view('pages.about' , [
            'about' => $about
        ]);
    }

    function SanPham() {
        $product_giaydantuong = CategoryProductQModel::getProduct(3);
        $product_sofa = CategoryProductQModel::getProduct(1);
        $product_dogo = CategoryProductQModel::getProduct(6);
        $product_tranhkinh = CategoryProductQModel::getProduct(2);
        $product_gach = CategoryProductQModel::getProduct(4);
        return view('pages.product', [
            'product_giaydantuong' =>$product_giaydantuong,
            'product_sofa' =>$product_sofa,
            'product_dogo' =>$product_dogo,
            'product_tranhkinh' =>$product_tranhkinh,
            'product_gach' =>$product_gach,
        ]);
    }

    function DuAn() {
        $project_bietthu = ProjectQModel::getProjectByCategory(1);
        $project_nhaco = ProjectQModel::getProjectByCategory(2);
        $project_nhalo = ProjectQModel::getProjectByCategory(3);
        $project_vanphong = ProjectQModel::getProjectByCategory(4);
        return view('pages.gallery', [
            'project_bietthu' => $project_bietthu,
            'project_nhaco' =>$project_nhaco,
            'project_nhalo' =>$project_nhalo,
            'project_vanphong' => $project_vanphong
        ]);
    }


}
