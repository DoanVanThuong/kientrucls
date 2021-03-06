<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\adminModels\DuAn;
use App\Http\Models\adminModels\BoSuuTap;
use App\Http\Models\adminModels\SanPham;
use App\Http\Models\adminModels\TinTuc;
use App\Http\Models\adminModels\KhachHang;
use App\Http\Models\adminModels\FeedBack;
use App\Http\Models\adminModels\LienLac;
use App\Http\Models\adminModels\GioiThieu;

use App\Http\Models\CategoryProductQModel;
use App\Http\Models\ProjectQModel;
use App\Http\Models\NewsQModel;

class AdminController extends Controller
{
    public function getDanhSach() {
        $numProjects = DuAn::count();
        $numGalleries = BoSuuTap::count();
        $numProducts = SanPham::count();
        $numNews = TinTuc::count();
        $product_newest = CategoryProductQModel::getProductByNum(4);
        $news_newest = NewsQModel::get_news(4);
        $project_newst = ProjectQModel::getProject(4);
        $member_newst = KhachHang::all();
        $feedback_newst = FeedBack::all();
        $contact = LienLac::all()->first();
        $gioithieu = GioiThieu::all()->first();
        return view('adminls.dashboard', [
            'numProjects' =>$numProjects,
            'numGalleries' =>$numGalleries,
            'numProducts' =>$numProducts,
            'numNews' =>$numNews,
            'product_newest' => $product_newest,
            'news_newest' => $news_newest,
            'project_newst' => $project_newst,
            'member_newst' => $member_newst,
            'feedback_newst' => $feedback_newst,
            'contact' => $contact,
            'gioithieu' => $gioithieu   
        ]);
    }
}
