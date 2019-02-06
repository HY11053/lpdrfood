<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\flink;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function Index()
    {
        $newlists=Archive::where('typeid',8)->take(6)->latest()->get();
        $zhinanlists=Archive::where('typeid',7)->take(7)->latest()->get();
        $asklists=Archive::where('typeid',14)->take(20)->latest()->get();
        $jingyinglists=Archive::where('typeid',15)->take(8)->latest()->get();
        $lirunlists=Archive::where('typeid',11)->take(6)->latest()->get();
        $feiyonglists=Archive::where('typeid',9)->take(6)->latest()->get();
        $chengbenlists=Archive::where('typeid',10)->take(7)->latest()->get();
        return view('frontend.index',compact('newlists','zhinanlists','asklists','jingyinglists','lirunlists','feiyonglists','chengbenlists'));
    }

}
