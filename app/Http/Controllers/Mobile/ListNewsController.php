<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Acreagement;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\Production;
use Carbon\Carbon;
use App\Overwrite\Paginator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListNewsController extends Controller
{
    /**文档列表 通配 包含普通文档 品牌文档及产品文档
     * @param $path
     * @param int $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listNews(Request $request,$path,$page=0)
    {
        $typeid=Arctype::where('real_path',preg_replace('/\/page\/[0-9]+/','',$request->path()))->value('id')?:abort(404);
        $thistypeinfo=Arctype::where('id',$typeid)->first();
        if ($thistypeinfo->reid)
        {
            $typeids=Arctype::where('reid',$thistypeinfo->reid)->pluck('id');
            $sontypes=Arctype::whereIn('id',$typeids)->get();
        }else{
            $sontypes=Arctype::where('reid',$typeid)->get();
        }
        $productions=Archive::whereIn('typeid',Arctype::where('reid',8)->pluck('id'))->take(6)->get();
        $newslists =Archive::take(10)->latest()->get();
        $hotlists =Archive::skip(10)->take(10)->latest()->get();
        $cid=$path;
        //针对不同栏目类型返回不同类型页面
        //普通文档列表
        if(Arctype::where('id',$typeid)->value('mid')==0)
        {
            $articlenavs=Arctype::where('mid',0)->take(6)->get();
            $pagelists=Archive::where('typeid',$typeid)->orderBy('published_at','desc')->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page);
            $pagelists= Paginator::transfer(
                $cid,//传入分类id,
                $pagelists//传入原始分页器
            );
            return view('mobile.list_article',compact('thistypeinfo','pagelists','sontypes','productions','newslists','articlenavs'));
        }elseif (Arctype::where('id',$typeid)->value('mid')==1)
        {
            return view('mobile.index_lists',compact('thistypeinfo','pagelists','productions','newslists','sontypes','hotlists'));
        }
    }


    public function map()
    {
        return view('mobile.map');
    }
}
