<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\adminModels\DuAn;
use App\Http\Models\adminModels\BoSuuTap;
use App\Http\Models\adminModels\SanPham;
use App\Http\Models\adminModels\TinTuc;
use App\Http\Models\CategoryProductQModel;


class AdminController extends Controller
{
    public function getDanhSach() {
        $numProjects = DuAn::count();
        $numGalleries = BoSuuTap::count();
        $numProducts = SanPham::count();
        $numNews = TinTuc::count();
        $product_newest = CategoryProductQModel::getProductByNum(4);
        return view('adminls.dashboard', [
            'numProjects' =>$numProjects,
            'numGalleries' =>$numGalleries,
            'numProducts' =>$numProducts,
            'numNews' =>$numNews,
            'product_newest' => $product_newest
            
        ]);
    }
}
