<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Lib\ReCaptcha;
use Illuminate\Support\Facades\Config;
use Mockery\Exception;
use App\Model\Host;

use Illuminate\Support\Facades\Crypt;


class SharedController extends Controller
{
    public function index()
    {
        return view('shared/index');
    }


    public function recaptcha(Request $request)
    {
        $reCaptcha = new ReCaptcha(Config::get('recaptcha.google.secret'));
        $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $request->input("g-recaptcha-response"));
        if ($response != null && $response->success) {
            return redirect('/shared/view');
        }
        return redirect('/shared')->with('error', '系统异常,验证失败');

    }

    public function qr($id)
    {
        $c = Host::findOrFail($id);
        if($c){
            $outfile = storage_path('qr/'.$c->id.'.png');
            if(!file_exists($outfile))
            {
                include app_path()."/Lib/phpqrcode.php";
                $errorLevel = "L";
                $PointSize  = 8;
                $margin = 5;
                \QRcode::png($c->ssr, $outfile, $errorLevel, $PointSize, $margin);
            }
            echo file_get_contents($outfile);
        }
    }

    public function view()
    {
        $model = Host::where('status','1')->orderBy('id','desc')->get();
        return view('shared/view',['model'=>$model]);
    }


}
