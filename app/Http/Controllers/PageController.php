<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\MenuQModel;
use App\Http\Models\CategoryProductQModel;
use App\Http\Models\ProjectQModel;

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


}