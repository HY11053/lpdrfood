@extends('mobile.mobile')
@section('title'){{ config('app.webname', '不二茶铺加盟') }}@stop
@section('keywords'){{ config('app.keywords', '不二茶铺加盟') }}@stop
@section('description'){{ config('app.description', '不二茶铺加盟') }}@stop
@section('main_content')
    <p class="bg-primary"><span class="glyphicon glyphicon-phone-alt "></span>不二の茶</p>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active"><a href="javascript:void(0)" onclick="openZoosUrl();return false;"><img class="center-block" src="/mobile/images/1.jpg" alt="不二の茶"></a> </div>
        <div class="item"><a href="javascript:void(0)" onclick="openZoosUrl();return false;"><img class="center-block" src="/mobile/images/2.jpg" alt="不二の茶"></a></div>
        <div class="item"><a href="javascript:void(0)" onclick="openZoosUrl();return false;"><img class="center-block" src="/mobile/images/3.jpg" alt="不二の茶"></a></div>
    </div>
</div>
<!--幻灯end-->
<p class="bg-primary">  <span class="glyphicon glyphicon-comment"> </span><a href="javascript:void(0);" onclick="openZoosUrl();return false;">免费领取资料</a></p>
<div class="container">
    <div class="row">
        <ul class="clearfix-m col-xs-12">
            <li class="col-xs-3"><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/zl.png"></span><span class="nav-font">{{\App\AdminModel\Arctype::where('id',1)->value('typename')}}</span></a></li>
            <li class="col-xs-3"><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/" ><span class="nav-img"><img class="img-responsive" src="/mobile/images/sy.png"></span><span class="nav-font">{{\App\AdminModel\Arctype::where('id',2)->value('typename')}}</span></a></li>
            <li class="col-xs-3"><a href="/{{\App\AdminModel\Arctype::where('id',9)->value('real_path')}}/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/dt.png"></span><span class="nav-font">{{\App\AdminModel\Arctype::where('id',9)->value('typename')}}</span></a></li>
            <li class="col-xs-3"><a href="/{{\App\AdminModel\Arctype::where('id',10)->value('real_path')}}/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/lc.png"></span><span class="nav-font">{{\App\AdminModel\Arctype::where('id',10)->value('typename')}}</span></a></li>
            <li class="col-xs-3"><a href="/{{\App\AdminModel\Arctype::where('id',11)->value('real_path')}}/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/js.png"></span><span class="nav-font">{{\App\AdminModel\Arctype::where('id',11)->value('typename')}}</span></a></li>
            <li class="col-xs-3"><a href="/{{\App\AdminModel\Arctype::where('id',12)->value('real_path')}}/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/zc.png"></span><span class="nav-font">{{\App\AdminModel\Arctype::where('id',12)->value('typename')}}</span></a></li>
            <li class="col-xs-3"><a href="/{{\App\AdminModel\Arctype::where('id',13)->value('real_path')}}/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/fa.png"></span><span class="nav-font">{{\App\AdminModel\Arctype::where('id',13)->value('typename')}}</span></a></li>
            <li class="col-xs-3"><a href="/{{\App\AdminModel\Arctype::where('id',14)->value('real_path')}}/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/lx.png"></span><span class="nav-font">{{\App\AdminModel\Arctype::where('id',14)->value('typename')}}</span></a></li>

        </ul>
    </div>
    <!--zonghe start-->

    <div class="row brands">
        <div class="bg-primary">不二の茶品牌介绍</div>
        <div class="indexabout">
            <div class="shipin">
                <video  width="100%" height="190" id="my-player" class="video-js vjs-big-play-centered" playsinline controls preload="auto" poster="/frontend/images/about.png" data-setup='{}'>
                    <source src="http://www.becpls.com/20170602.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>

<div class="zonghe">
    <ul class="zonghe-nav clearfix">
        <li><a class="zonghe-nav-moren">加盟费用</a>
            <div class="zonghe-con" style="display:block;">
                @foreach($feiyonglists as $feiyonglist)
                <div class="zonghe-con-list clearfix">
                    <a href="/{{$feiyonglist->arctype->real_path}}/{{$feiyonglist->id}}.html"><img src="{{$feiyonglist->litpic}}"/></a>
                    <div class="zonghe-right">
                        <a href="/{{$feiyonglist->arctype->real_path}}/{{$feiyonglist->id}}.html">{{$feiyonglist->title}}</a>
                        <span class="zonghe-con-font">
                      {{str_limit($feiyonglist->description,96,'...')}}
                    </span>
                    </div>
                </div>
                @endforeach
            </div>
        </li>

        <li><a>投资分析</a>
            <div class="zonghe-con">
                @foreach($jingyinglists as $jingyinglist)
                    <div class="zonghe-con-list clearfix">
                        <a href="/{{$jingyinglist->arctype->real_path}}/{{$jingyinglist->id}}.html"><img src="{{$jingyinglist->litpic}}"/></a>
                        <div class="zonghe-right">
                            <a href="/{{$jingyinglist->arctype->real_path}}/{{$jingyinglist->id}}.html">{{$jingyinglist->title}}</a>
                            <span class="zonghe-con-font">
                            {{str_limit($jingyinglist->description,96,'...')}}
                    </span>
                        </div>
                    </div>
                @endforeach

            </div>
        </li>
        <li><a>行业动态</a>
            <div class="zonghe-con">
                @foreach($newlists as $newlist)
                    <div class="zonghe-con-list clearfix">
                        <a href="/{{$newlist->arctype->real_path}}/{{$newlist->id}}.html"><img src="{{$newlist->litpic}}"/></a>
                        <div class="zonghe-right">
                            <a href="/{{$newlist->arctype->real_path}}/{{$newlist->id}}.html">{{$newlist->title}}</a>
                            <span class="zonghe-con-font">
                            {{str_limit($newlist->description,96,'...')}}
                    </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </li>
    </ul>

</div>

<!--产品展示 start-->
<div class="cp-show">
    <div class="cp-show-header"><span>新产品推荐</span></div>
    <ul class="cp-show-list clearfix">
        @foreach($lirunlists as $lirunlist)
        <li>
            <a href="/{{$lirunlist->arctype->real_path}}/{{$lirunlist->id}}.html"><img src="{{$lirunlist->litpic}}"/></a>
            <span class="cp-font">
            <a href="/{{$lirunlist->arctype->real_path}}/{{$lirunlist->id}}.html">{{$lirunlist->title}}</a>
          </span>
        </li>
        @endforeach
    </ul>
</div>
<!--产品展示 end-->
<hr/>

@stop
