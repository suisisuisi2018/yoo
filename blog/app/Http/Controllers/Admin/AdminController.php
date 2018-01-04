<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Mockery\Exception;
use App\Model\Host;

use App\Lib\SSR;

class AdminController extends BaseAdminController
{



    public function index()
    {
        //


        return view('admin/admin/index');
    }

}
