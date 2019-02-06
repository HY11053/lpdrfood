<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\Production;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;

class CheckToolsController extends Controller
{

    /**
     * 文档采集发布时间更新
     */

        public function updateArticleTime()
        {

            $arctypes=Arctype::where('mid',1)->pluck('id');
            foreach ($arctypes as $arctype) {

                Arctype::where('id', $arctype)->update(['contents'=>Arctype::where('id',2)->value('contents')]);
            }
        }

}
