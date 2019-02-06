@extends('frontend.frontend')
@section('title'){{$thistypeinfo->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('headlibs')
    <meta name="Copyright" content="{{config('app.indexname')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.indexname')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}"/>
    <link href="/frontend/css/news.css" rel="stylesheet" type="text/css" />
@stop
@section('main_content')
    <div class="weizhi2">当前位置： <a href="/">主页</a> &gt; <a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a> &gt; </div>
    <div class="h_box">
        <div class="main_left">
            <div class="news_nav">
                <ul class="clearfix">
                    @foreach($articlenavs as $articlenav)
                    <li class=""><a href="/{{$articlenav->real_path}}/" title="{{$articlenav->typename}}">{{$articlenav->typename}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="news_list">
                <ul>
                    @foreach($pagelists as $pagelist)
                    <li>
                        <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html" target="_blank"><img src="{{$pagelist->litpic}}" width="190" height="130" alt="{{$pagelist->title}}"></a>
                        <strong><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html">{{$pagelist->title}}</a></strong>
                        <p>{{$pagelist->description}}...<a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html">[详情&gt;&gt;]</a></p>
                        <span><b>{{$pagelist->created_at}}</b></span>
                    </li>
                    @endforeach

                </ul>
                <div class="page">
                    <ol class="pagination-wrapper">
                        {!! str_replace('page=','page/',str_replace('?','/',preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()))) !!}
                    </ol>
                </div>
            </div>
        </div>

        <div class="w320 fl" style="float: right; margin-top: 0px;">
            <div class="plr20-tb15 mb20 bg-ff box-shadow ">
                <div class="lh24">
                    <h3 class="f22">不二茶铺热门产品</h3>
                </div>
                <dl class="tu-list clearfix mt15" style="margin-top: 10px;">
                    <dd class="magnify magnify-txt  mr10 "><a target="_blank" href="/brand/1226/" class="img-block">
                            <img src="/frontend/images/pd1.jpg" alt=" 爆乐橙子">
                            <div class="img-bg"></div>
                            <p>爆乐橙子</p>
                        </a>
                    </dd>
                    <dd class="magnify magnify-txt "><a target="_blank" href="/brand/1216/" class="img-block">
                            <img src="/frontend/images/pd2.jpg" alt=" 爆乐红西柚">
                            <div class="img-bg"></div>
                            <p>爆乐红西柚</p>
                        </a>
                    </dd>
                    <dd class="magnify magnify-txt  mr10 "><a target="_blank" href="/brand/1033/" class="img-block">
                            <img src="/frontend/images/pd3.jpg" alt=" 草莓酪酪">
                            <div class="img-bg"></div>
                            <p>草莓酪酪</p>
                        </a>
                    </dd>
                    <dd class="magnify magnify-txt "><a target="_blank" href="/brand/660/" class="img-block">
                            <img src="/frontend/images/pd5.jpg" alt=" 不二奶溶系列">
                            <div class="img-bg"></div>
                            <p>不二奶溶系列</p>
                        </a>
                    </dd>
                    <div class="clear"></div>
                </dl>
            </div>
            <div class="bg-ff p20 mt20">
                <div class="lh24">
                    <h3 class="f22">不二茶铺加盟资讯</h3>
                </div>
                <ul class="tw-list tw-list-h84 mt15">
                    @foreach($newslists as $newslist)
                    <li><a target="_blank" href="/{{$newslist->arctype->real_path}}/{{$newslist->id}}.html" class="img-block magnify"><img src="{{$newslist->litpic}}" alt="{{$newslist->title}}"></a>
                        <p class="f16">
                            <a target="_blank" href="/{{$newslist->arctype->real_path}}/{{$newslist->id}}.html">{{$newslist->title}}</a>
                        </p>
                        <p class="f14 s-8c">{{$newslist->description}}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop
