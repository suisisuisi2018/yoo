<?php
//a1235
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Mockery\Exception;
use App\Model\Host;

class HostController extends BaseAdminController
{
    public function index()
    {
        $model = Host::orderBy('status','desc')->orderBy('id','desc')->get();
        return view('admin/host/index',['model'=>$model]);
    }

    public function create()
    {

        return view('admin/host/create');
    }


    public function save(Request $request)
    {
        $model = new Host();
        $ssr   = trim($request->input('ssr'));
        if(strpos($ssr,'ssr://') === false){
            return redirect()->back()->with('message','SSR路径错误');
        }
        if($host  = $model->where('ssr',$ssr)->first()){
            return redirect()->back()->with('message','SSR路径已存在');
        }else{
            $model->ssr = $request->input('ssr');
            $model->status = 1;
            $model->save();
            return redirect()->back();
        }
    }


    public function delete(Request $request)
    {
        $id = $request->input('id');
        $host = Host::findOrFail($id);
        $host->status = $host->status == 1 ?0:1;
        $host->save();
        return redirect()->back();
    }

}
