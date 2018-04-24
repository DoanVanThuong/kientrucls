<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InboxController extends Controller
{
    function getDanhSach() {
        return view('adminls.inbox.danhsach'); 
    }
}
