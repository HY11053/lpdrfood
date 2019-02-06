@extends('frontend.frontend')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{$thisarticleinfos->description}}@stop
@section('headlibs')
    <meta name="Copyright" content="{{config('app.name')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.name')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
    <meta property="og:type" content="article"/>
    <meta property="article:published_time" content="{{$thisarticleinfos->created_at}}+08:00" />
    <meta property="og:image" content="{{config('app.url')}}{{str_replace(config('app.url'),'',$thisarticleinfos->litpic)}}"/>
    <link href="/frontend/css/news.css" rel="stylesheet" type="text/css" />
@stop
@section('main_content')
    <div class="weizhi2">当前位置： <a href="/">主页</a> &gt; <a href="/{{$thisarticleinfos->arctype->real_path}}/">{{$thisarticleinfos->arctype->typename}}</a> &gt; </div>
    <div class="h_box" style="background-color:#fff;">
    <div class="contentbox">
        <div class="content_bt">
            <h1>{{$thisarticleinfos->title}}</h1>
            <div class="content_ly">时间：{{$thisarticleinfos->created_at}}| 来源：不二の茶 </div>
        </div>
        <div class="clearfix content2">
            {!! $thisarticleinfos->body !!}

        </div>

        <div class="fenxiangdaima clearfix">
            <div class="bshare-custom"><div class="bsPromo bsPromo2"></div><a class="bshare-qzone" title="分享到QQ空间"></a><a class="bshare-sinaminiblog" title="分享到新浪微博"></a><a class="bshare-renren" title="分享到人人网"></a><a class="bshare-qqmb" title="分享到腾讯微博"></a><a class="bshare-neteasemb" title="分享到网易微博"></a><a class="bshare-more bshare-more-icon more-style-addthis" title="更多平台"></a><span class="BSHARE_COUNT bshare-share-count" style="float:none;">0</span></div><script src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh" charset="utf-8" type="text/javascript"></script><script src="http://static.bshare.cn/b/bshareC0.js" charset="utf-8" type="text/javascript"></script>
            <div class="nr_biaoqian"><b>标签</b></div>
        </div>

        <div class="shangxiapian">
            <span class="right">下一篇：@if(isset($next_article->id))<a href="/{{$next_article->arctype->real_path}}/{{$next_article->id}}.html">{{$next_article->title}}</a>@else 没有了 @endif </span>
            <span>上一篇：@if(isset($prev_article->id))<a href="/{{$prev_article->arctype->real_path}}/{{$prev_article->id}}.html">{{$prev_article->title}}</a>@else 没有了 @endif </span>
        </div>

        <div class="xg_news">
            <div class="title"><strong>相关阅读</strong></div>
            <ul class="clearfix">
                @foreach($cnews as $cnew)
                <li><em>{{$cnew->created_at}}</em><a href="/{{$cnew->arctype->real_path}}/{{$cnew->id}}.html">{{$cnew->title}}</a></li>
                @endforeach
            </ul>
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
                    @foreach($latesenews as $latesenew)
                    <li><a target="_blank" href="/{{$latesenew->arctype->real_path}}/{{$latesenew->id}}.html" class="img-block magnify"><img src="{{$latesenew->litpic}}" alt="{{$latesenew->title}}"></a>
                        <p class="f16">
                            <a target="_blank" href="/{{$latesenew->arctype->real_path}}/{{$latesenew->id}}.html">{{$latesenew->title}}</a>
                        </p>
                        <p class="f14 s-8c">{{$latesenew->description}}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
@stop