<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Lib\ReCaptcha;
use Illuminate\Support\Facades\Config;
use Mockery\Exception;
use App\Model\Host;

use Illuminate\Support\Facades\Crypt;


class GeneratedController extends Controller
{
    public function siteMap()
    {
        return response()->view('generated.sitemap')->header('Content-Type', 'text/xml');
    }


}