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
@stop
@section('main_content')
    <div class="box2">
        <div class="clearfix pd">
            <div class="w320">
                <div class="nav">
                    <h2>品牌介绍</h2>
                    <ul>
                        @foreach($sontypes as $sontype)
                        <li><a href="/{{$sontype->real_path}}/">{{$sontype->typename}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="ullb2 bk">
                    <h2 class="bt6"><span>推荐阅读</span></h2>
                    <ul>
                        @foreach($newslists as $newslist)
                            <li><a href="/{{$newslist->arctype->real_path}}/{{$newslist->id}}.html">{{$newslist->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="ullb3 bk">
                    <h2 class="bt6"><span>不二产品</span></h2>
                    <ul class="clearfix" style="margin-top: 10px;">
                        <li><span><a href="#"><img src="/frontend/images/pd1.jpg" width="126" height="96"></a></span>
                            <strong><a href="#">不二の茶爆乐橙子</a></strong></li>
                        <li><span><a href="#"><img src="/frontend/images/pd2.jpg" width="126" height="96"></a></span>
                            <strong><a href="#">不二の茶爆乐红西柚</a></strong></li>
                        <li><span><a href="#"><img src="/frontend/images/pd3.jpg" width="126" height="96"></a></span>
                            <strong><a href="#">不二の茶爆乐红西柚</a></strong></li>
                        <li><span><a href="#"><img src="/frontend/images/pd5.jpg" width="126" height="96"></a></span>
                            <strong><a href="#">不二の茶爆乐红西柚</a></strong></li>
                        <li><span><a href="#"><img src="/frontend/images/pd6.jpg" width="126" height="96"></a></span>
                            <strong><a href="#">不二の茶爆乐红西柚</a></strong></li>
                        <li><span><a href="#"><img src="/frontend/images/pd7.jpg" width="126" height="96"></a></span>
                            <strong><a href="#">不二の茶爆乐红西柚</a></strong></li>

                    </ul>
                </div>
                  <div class="ullb2 bk">
                    <h2 class="bt6"><span>热门关注</span></h2>
                    <ul>
                        @foreach($hotlists as $hotlist)
                        <li><a href="/{{$hotlist->arctype->real_path}}/{{$hotlist->id}}.html">{{$hotlist->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="w870">
                <div class="bt7"><h1>{{$thistypeinfo->typename}}</h1><div class="weizhi">当前位置：<a href="/">主页</a> &gt;  &gt; <a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a> &gt; </div></div>
                <div class="bg_2">
                    <div class="title1"><strong>{{$thistypeinfo->typename}}</strong></div>
                    <div class="introduction">
                        {!! $thistypeinfo->contents !!}
                     </div>
                </div>
            </div>
        </div>
    </div>
@stop
