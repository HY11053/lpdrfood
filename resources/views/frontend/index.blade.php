@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
    <link href="/frontend/css/video-js.css" rel="stylesheet">
@stop
@section('main_content')
    <div style="z-index:-9; height:auto; overflow:hidden;">
        <div class="brflixside">
            <ul class="slides">
                <li><a href="javascript:void(0)" onclick="online()" rel="nofollow" target="_blank">
                        <div style="background:url(/frontend/images/b_01.jpg) no-repeat center top; height:116px;">
                            <div class="h_box"></div>
                        </div>
                        <div style="background:url(/frontend/images/b_02.jpg) no-repeat center top; height:116px;">
                            <div class="h_box"></div>
                        </div>
                        <div style="background:url(/frontend/images/b_03.jpg) no-repeat center top; height:116px;">
                            <div class="h_box"></div>
                        </div>
                        <div style="background:url(/frontend/images/b_04.jpg) no-repeat center top; height:116px;">
                            <div class="h_box"></div>
                        </div>
                        <div style="background:url(/frontend/images/b_05.jpg) no-repeat center top; height:116px;">
                            <div class="h_box"></div>
                        </div>
                    </a>
                </li>
                <li><a href="javascript:void(0)" onclick="online()" rel="nofollow"  target="_blank">
                        <div style="background:url(/frontend/images/c_01.gif) no-repeat center top; height:116px;">
                            <div class="h_box"></div>
                        </div>
                        <div style="background:url(/frontend/images/c_02.gif) no-repeat center top; height:116px;">
                            <div class="h_box"></div>
                        </div>
                        <div style="background:url(/frontend/images/c_03.gif) no-repeat center top; height:116px;">
                            <div class="h_box"></div>
                        </div>
                        <div style="background:url(/frontend/images/c_04.gif) no-repeat center top; height:116px;">
                            <div class="h_box"></div>
                        </div>
                        <div style="background:url(/frontend/images/c_05.gif) no-repeat center top; height:116px;">
                            <div class="h_box"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="online()" rel="nofollow"  target="_blank">
                        <div style="background:url(/frontend/images/d_01.jpg) no-repeat center top; height:116px;">
                            <div class="h_box"></div>
                        </div>
                        <div style="background:url(/frontend/images/d_02.jpg) no-repeat center top; height:116px;">
                            <div class="h_box"></div>
                        </div>
                        <div style="background:url(/frontend/images/d_03.jpg) no-repeat center top; height:116px;">
                            <div class="h_box"></div>
                        </div>
                        <div style="background:url(/frontend/images/d_04.jpg) no-repeat center top; height:116px;">
                            <div class="h_box"></div>
                        </div>
                        <div style="background:url(/frontend/images/d_05.jpg) no-repeat center top; height:116px;">
                            <div class="h_box"></div>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    {{--flash_end--}}
    <div class="box4 quick_nav m25">
        <ul>
            <li>
                <div class="i_show_tan"><a href="/{{\App\AdminModel\Arctype::where('id','2')->value('real_path')}}/" target="_blank"><img src="/frontend/images/t_ic5.jpg" alt="{{\App\AdminModel\Arctype::where('id',2)->value('typename')}}"></a></div>
                <div class="tit"><a href="/{{\App\AdminModel\Arctype::where('id','2')->value('real_path')}}/" target="_blank"><i class="icon5"></i>{{\App\AdminModel\Arctype::where('id',2)->value('typename')}}</a></div>
            </li>
            <li>
                <div class="i_show_tan"><a href="/{{\App\AdminModel\Arctype::where('id','3')->value('real_path')}}/" target="_blank"><img src="/frontend/images/t_ic6.jpg" alt="{{\App\AdminModel\Arctype::where('id',3)->value('typename')}}"></a></div>
                <div class="tit"><a href="/{{\App\AdminModel\Arctype::where('id','3')->value('real_path')}}/" target="_blank"><i class="icon5"></i>{{\App\AdminModel\Arctype::where('id',3)->value('typename')}}</a></div>
            </li>
            <li>
                <div class="i_show_tan"><a href="/{{\App\AdminModel\Arctype::where('id','4')->value('real_path')}}/" target="_blank"><img src="/frontend/images/t_ic1.jpg" alt="{{\App\AdminModel\Arctype::where('id',4)->value('typename')}}"></a></div>
                <div class="tit"><a href="/{{\App\AdminModel\Arctype::where('id','4')->value('real_path')}}/" target="_blank"><i class="icon1"></i>{{\App\AdminModel\Arctype::where('id',4)->value('typename')}}</a></div>
            </li>
            <li>
                <div class="i_show_tan"><a href="/{{\App\AdminModel\Arctype::where('id','5')->value('real_path')}}/" target="_blank"><img src="/frontend/images/t_ic2.jpg" alt="{{\App\AdminModel\Arctype::where('id',5)->value('typename')}}"></a></div>
                <div class="tit"><a href="/{{\App\AdminModel\Arctype::where('id','5')->value('real_path')}}/" target="_blank"><i class="icon2"></i>{{\App\AdminModel\Arctype::where('id',5)->value('typename')}}</a></div>
            </li>
            <li>
                <div class="i_show_tan"><a href="/{{\App\AdminModel\Arctype::where('id','6')->value('real_path')}}/" target="_blank"><img src="/frontend/images/t_ic3.jpg" alt="{{\App\AdminModel\Arctype::where('id',6)->value('typename')}}"></a></div>
                <div class="tit"><a href="/{{\App\AdminModel\Arctype::where('id','6')->value('real_path')}}/" target="_blank"><i class="icon3"></i>{{\App\AdminModel\Arctype::where('id',6)->value('typename')}}</a></div>
            </li>
            <li>
                <div class="i_show_tan"><a href="/{{\App\AdminModel\Arctype::where('id','7')->value('real_path')}}/" target="_blank"><img src="/frontend/images/t_ic4.jpg" alt="{{\App\AdminModel\Arctype::where('id',7)->value('typename')}}"></a></div>
                <div class="tit"><a href="/{{\App\AdminModel\Arctype::where('id','7')->value('real_path')}}/" target="_blank"><i class="icon4"></i>{{\App\AdminModel\Arctype::where('id',7)->value('typename')}}</a></div>
            </li>
        </ul>
    </div>
    <div class="h_box clearfix m25">
        <div class="in_news1 left">
            <h2 class="title"><strong><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/" target="_blank">{{\App\AdminModel\Arctype::where('id',1)->value('typename')}}</a></strong><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/" class="more" target="_blank">更多+</a></h2>
            <div class="shipin">
                <video  width="280" height="190" id="my-player" class="video-js vjs-big-play-centered" playsinline controls preload="auto" poster="/frontend/images/about.png" data-setup='{}'>
                    <source src="http://www.becpls.com/20170602.mp4" type="video/mp4">
                </video>
            </div>
            <p class="in_news1-bt">不二茶铺 品牌故事 只为做更用心的茶</p>
        </div>
        <div class="in_news1 in_news left">
            <h2 class="title"><strong><a href="/{{\App\AdminModel\Arctype::where('id',8)->value('real_path')}}/" target="_blank">{{\App\AdminModel\Arctype::where('id',8)->value('typename')}}</a></strong><a href="/{{\App\AdminModel\Arctype::where('id',8)->value('real_path')}}/" class="more" target="_blank">更多+</a></h2>
            <dl>
                @foreach($newlists as $newlist)
                    @if($loop->first)
                        <dt><a href="/{{$newlist->arctype->real_path}}/{{$newlist->id}}.html"><img src="{{$newlist->litpic}}" alt="{{$newlist->title}}" title="{{$newlist->title}}" width="70px" height="70px"></a></dt>
                        <dd> <strong><a href="/{{$newlist->arctype->real_path}}/{{$newlist->id}}.html" title="{{$newlist->title}}" target="_blank">{{$newlist->title}}</a></strong>
                            <p>{{str_limit($newlist->description,90,'...')}}<a href="/{{$newlist->arctype->real_path}}/{{$newlist->id}}.html" title="{{$newlist->title}}" target="_blank">详情»</a></p>
                        </dd>
                    @endif
                @endforeach
            </dl>
            <ul>
                @foreach($newlists as $newlist)
                    @if(!$loop->first)
                    <li><em>{{date(strtotime($newlist->created_at))}}</em><a href="/{{$newlist->arctype->real_path}}/{{$newlist->id}}.html" title="{{$newlist->title}}" target="_blank">{{$newlist->title}}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="main_news fl">
            <h2 class="title"><strong><a href="/{{\App\AdminModel\Arctype::where('id',7)->value('real_path')}}/" target="_blank">{{\App\AdminModel\Arctype::where('id',7)->value('typename')}}</a></strong><a href="/{{\App\AdminModel\Arctype::where('id',7)->value('real_path')}}/" class="more" target="_blank">更多+</a></h2>
            <div class="synos">
                @foreach($zhinanlists as $zhinanlist)
                    @if($loop->first)
                    <a href="/{{$zhinanlist->arctype->real_path}}/{{$zhinanlist->id}}.html" target="_blank" class="fl"><img src="{{$zhinanlist->litpic}}" alt="{{$zhinanlist->title}}"></a>
                    <h3><a href="/{{$zhinanlist->arctype->real_path}}/{{$zhinanlist->id}}.html" target="_blank">{{str_limit($zhinanlist->title,38,'')}}</a></h3>
                    <p>{{str_limit($zhinanlist->description,160,'...')}}<a href="/{{$zhinanlist->arctype->real_path}}/{{$zhinanlist->id}}.html" target="_blank">[详细]</a></p>
                    @endif
                @endforeach
                    <div class="both"></div>
            </div>
            <ul class="news_list">
                @foreach($zhinanlists as $zhinanlist)
                    @if(!$loop->first)
                    <li class="clo"><a href="/{{$zhinanlist->arctype->real_path}}/{{$zhinanlist->id}}.html" target="_blank">{{$zhinanlist->title}}</a></li>
                    @endif
                @endforeach
            </ul>
            <div class="both"></div>
        </div>
    </div>
    <div class="box4 m25">
        <a href="/production/">
            <div class="common_hd">
                <div class="tit"><img src="/frontend/images/productions.png" alt="不二产品"></div>
                <div class="info">不二之选 5大茶饮品类系列</div>
                <div class="more"><a href="javascript:void(0)" onclick="online()"><img src="/frontend/images/index_ask_btn.gif" alt="立即在线咨询"></a></div>
            </div>
        </a>
        <div class="index_jm" >
            <div class="index_jm_tab">
                <ul>
                    <li class="on"><a href="#" target="_blank">不二研究所</a></li>
                    <li><a href="#" target="_blank">不二奶溶</a></li>
                    <li><a href="#" target="_blank">二喜鲜果茶</a></li>
                    <li><a href="#" target="_blank">脏脏茶本铺</a></li>
                    <li><a href="#" target="_blank">鲜果酪酪</a></li>
                </ul>
            </div>
            <div class="index_jm_cont">
                <div class="index_jm_list">
                    <ul>
                        <li><img src="/frontend/images/pd1.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd2.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd3.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd6.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd5.jpg" alt=""></li>
                    </ul>
                </div>
                <div class="index_jm_list">
                    <ul>
                        <li><img src="/frontend/images/pd7.jpg" alt="1"></li>
                        <li><img src="/frontend/images/pd5.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd6.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd1.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd2.jpg" alt=""></li>
                    </ul>
                </div>
                <div class="index_jm_list">
                    <ul>
                        <li><img src="/frontend/images/pd1.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd2.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd3.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd6.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd5.jpg" alt=""></li>
                    </ul>
                </div>
                <div class="index_jm_list">
                    <ul>
                        <li><img src="/frontend/images/pd7.jpg" alt="1"></li>
                        <li><img src="/frontend/images/pd5.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd6.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd1.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd2.jpg" alt=""></li>
                    </ul>
                </div>
                <div class="index_jm_list">
                    <ul>
                        <li><img src="/frontend/images/pd1.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd2.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd3.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd6.jpg" alt=""></li>
                        <li><img src="/frontend/images/pd5.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="box4 m25">
        <div class="common_hd">
            <div class="tit"><img src="/frontend/images/joinpay.png" alt="加盟费"></div>
            <!--<div class="info">超强实力认证  引领行业高度</div>-->
            <div class="more"><a href="javascript:void(0)" onclick="online()"><img src="/frontend/images/index_ask_btn.gif" alt="立即在线咨询"></a></div>
        </div>
        <ul class="mendianbox-list">
            <li class="mendianbox">
                <div target="_blank" data-name="Y73 全面屏 3GB+32GB" href="/product/10616?colorSkuid=5569">
                    <img src="/frontend/images/mendian1.jpg">
                </div>
                <div class="prodinfo">
                    <p class="name">
                        不二の茶基础店
                    </p>
                    <p class="feature"><span>实际使用面积不低于15平米</span></p>
                    <p class="feature"><span>店面招牌位置不低于1.8米；</span></p>
                    <p class="feature"><span>室内操作区净使用宽度</span></p>
                    <p class="price rmb-symbol">447999.00</p>
                </div>
            </li>

 <li class="mendianbox">
                <div target="_blank" data-name="Y73 全面屏 3GB+32GB" href="/product/10616?colorSkuid=5569">
                    <img src="/frontend/images/mendian1.jpg">
                </div>
                <div class="prodinfo">
                    <p class="name">
                        不二の茶中型店
                    </p>
                    <p class="feature"><span>实际使用面积不低于15平米</span></p>
                    <p class="feature"><span>店面招牌位置不低于1.8米；</span></p>
                    <p class="feature"><span>室内操作区净使用宽度</span></p>
                    <p class="price rmb-symbol">547999.00</p>
                </div>
            </li>

 <li class="mendianbox">
                <div target="_blank" data-name="Y73 全面屏 3GB+32GB" href="/product/10616?colorSkuid=5569">
                    <img src="/frontend/images/mendian1.jpg">
                </div>
                <div class="prodinfo">
                    <p class="name">
                        不二の茶大型店
                    </p>
                    <p class="feature"><span>实际使用面积不低于15平米</span></p>
                    <p class="feature"><span>店面招牌位置不低于1.8米；</span></p>
                    <p class="feature"><span>室内操作区净使用宽度</span></p>
                    <p class="price rmb-symbol">647999.00</p>
                </div>
            </li>

 <li class="mendianbox">
                <div target="_blank" data-name="Y73 全面屏 3GB+32GB" href="/product/10616?colorSkuid=5569">
                    <img src="/frontend/images/mendian1.jpg">
                </div>
                <div class="prodinfo">
                    <p class="name">
                        不二の茶大型店
                    </p>
                    <p class="feature"><span>实际使用面积不低于15平米</span></p>
                    <p class="feature"><span>店面招牌位置不低于1.8米；</span></p>
                    <p class="feature"><span>室内操作区净使用宽度</span></p>
                    <p class="price rmb-symbol">747999.00</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="box4 m25"> <a href="#">
            <div class="common_hd">
                <div class="tit"><img src="/frontend/images/teamgroup.png" alt="不二茶铺运营研发团队"></div>
                <div class="info"></div>
                <div class="more"><a href="javascript:void(0)" onclick="online()"><img src="/frontend/images/index_ask_btn.gif" alt="立即在线咨询"></a></div>
            </div>
        </a>
        <div class="gswh">
            <ul>
                <li><img src="/frontend/images/td1.jpg" alt="xxxx"></li>
                <li><img src="/frontend/images/td2.jpg" alt="xxxx"></li>
                <li><img src="/frontend/images/td3.jpg" alt="xxxx"></li>
                <li><img src="/frontend/images/td4.jpg" alt="xxxx"></li>
                <li><img src="/frontend/images/td5.jpg" alt="xxxx"></li>
                <li><img src="/frontend/images/td6.jpg" alt="xxxx"></li>
                <li><img src="/frontend/images/td7.jpg" alt="xxxx"></li>
                <li><img src="/frontend/images/td8.jpg" alt="xxxx"></li>
                <li><img src="/frontend/images/td9.jpg" alt="xxxx"></li>
                <li><img src="/frontend/images/td1.jpg" alt="xxxx"></li>
            </ul>
        </div>
    </div>
    <div class="con5 center box-shadow">
        <div class="con5-left">
            <a href="/zhinan/qspp/">
                <div class="common_hd">
                    <div class="tit"><img src="/frontend/images/brandcon.png" alt="强势品牌"></div>
                    <div class="info"></div>
                </div>
            </a>
            <div class="con5-left-tu">
                <div class="con5-left-tu1">
                    <div>
                        <a href="#">不二茶铺奉贤南桥店</a>
                    </div>
                </div>
                <div class="con5-left-tu2">
                    <div>
                        <a href="#">不二茶铺浦东八佰伴店</a>
                    </div>
                </div>
                <div class="con5-left-tu3">
                    <div>
                        <a href="#" rel="nofollow">不二茶铺镇坪路店</a>
                    </div>
                </div>
                <div class="con5-left-tu4">
                    <div>
                        <a href="#">不二茶铺镇坪路店</a>
                    </div>
                </div>
                <div class="con5-left-tu5">
                    <div>
                        <a href="#">不二茶铺浦东八佰伴店</a>
                    </div>
                </div>
            </div>
            <div class="con5-left-zi">
                <ul>
                    @foreach($asklists as $index=>$asklist)
                        <li @if($index<4) class="first_line" @endif><a href="/{{$asklist->arctype->real_path}}/{{$asklist->id}}.html" style="font-size: 12px;">{{$asklist->title}}</a></li>
                    @endforeach
                </ul>
            </div>

        </div>
        <div class="con5-right">
            <h1>经营指南</h1>
            <div></div>
            <img src="/frontend/images/bf1bc4bce8c4854a7e1c4b4465445de5.jpg">
            <ul>
                @foreach($jingyinglists as $jingyinglist)
                    <li><a href="/{{$jingyinglist->arctype->real_path}}/{{$jingyinglist->id}}.html"><span>{{$jingyinglist->title}}</span></a></li>
                @endforeach
            </ul>

        </div>
    </div>
    <div class="box4 m25">
        <div class="cp-title"><strong><a href="/products/" target="_blank">8大品类，60款畅销单品</a></strong><a href="/products/" class="more" target="_blank">产品类别»</a><a href="/products/" class="more" target="_blank">新品上线»</a></div>
        <div class="cp-box"><a href="/products/" title="13+1大类产品，1000多款畅销单品"><img src="/frontend/images/cp-banner.jpg" alt="12大类产品，上千款畅销单品"></a></div>
    </div>
    <div class="h_box clearfix m25">
        <div class="in_news1 in_news left">
            <h2 class="title"><strong><a href="/{{\App\AdminModel\Arctype::where('id',11)->value('real_path')}}/" target="_blank">{{\App\AdminModel\Arctype::where('id',11)->value('typename')}}</a></strong><a href="/{{\App\AdminModel\Arctype::where('id',11)->value('real_path')}}/" class="more" target="_blank">更多+</a></h2>
            <dl>
                @foreach($lirunlists as $lirunlist)
                    @if($loop->first)
                        <dt><a href="/{{$lirunlist->arctype->real_path}}/{{$lirunlist->id}}.html"><img src="{{$lirunlist->litpic}}" alt="{{$lirunlist->title}}" title="{{$lirunlist->title}}" width="70px" height="70px"></a></dt>
                        <dd> <strong><a href="/{{$lirunlist->arctype->real_path}}/{{$lirunlist->id}}.html" title="{{$lirunlist->title}}" target="_blank">{{$lirunlist->title}}</a></strong>
                            <p>{{str_limit($lirunlist->description,86,'...')}}<a href="/{{$lirunlist->arctype->real_path}}/{{$lirunlist->id}}.html" title="{{$lirunlist->title}}" target="_blank">详情»</a></p>
                        </dd>
                    @endif
                @endforeach
            </dl>
            <ul>
                @foreach($lirunlists as $lirunlist)
                    @if(!$loop->first)
                        <li><em>{{date(strtotime($lirunlist->created_at))}}</em><a href="/{{$lirunlist->arctype->real_path}}/{{$lirunlist->id}}.html" title="{{$lirunlist->title}}" target="_blank">{{$lirunlist->title}}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="in_news1 in_news left">
            <h2 class="title"><strong><a href="/{{\App\AdminModel\Arctype::where('id',9)->value('real_path')}}/" target="_blank">{{\App\AdminModel\Arctype::where('id',9)->value('typename')}}</a></strong><a href="/{{\App\AdminModel\Arctype::where('id',9)->value('real_path')}}/" class="more" target="_blank">更多+</a></h2>
            <dl>
                @foreach($feiyonglists as $feiyonglist)
                    @if($loop->first)
                        <dt><a href="/{{$feiyonglist->arctype->real_path}}/{{$feiyonglist->id}}.html"><img src="{{$feiyonglist->litpic}}" alt="{{$feiyonglist->title}}" title="{{$feiyonglist->title}}" width="70px" height="70px"></a></dt>
                        <dd> <strong><a href="/{{$feiyonglist->arctype->real_path}}/{{$feiyonglist->id}}.html" title="{{$feiyonglist->title}}" target="_blank">{{$feiyonglist->title}}</a></strong>
                            <p>{{str_limit($feiyonglist->description,86,'...')}}<a href="/{{$feiyonglist->arctype->real_path}}/{{$feiyonglist->id}}.html" title="{{$feiyonglist->title}}" target="_blank">详情»</a></p>
                        </dd>
                    @endif
                @endforeach
            </dl>
            <ul>
                @foreach($feiyonglists as $feiyonglist)
                    @if(!$loop->first)
                        <li><em>{{date(strtotime($feiyonglist->created_at))}}</em><a href="/{{$feiyonglist->arctype->real_path}}/{{$feiyonglist->id}}.html" title="{{$feiyonglist->title}}" target="_blank">{{$feiyonglist->title}}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="main_news fl">
            <h2 class="title"><strong><a href="/{{\App\AdminModel\Arctype::where('id',10)->value('real_path')}}/" target="_blank">{{\App\AdminModel\Arctype::where('id',10)->value('typename')}}</a></strong><a href="/{{\App\AdminModel\Arctype::where('id',10)->value('real_path')}}/" class="more" target="_blank">更多+</a></h2>
            <div class="synos">
                @foreach($chengbenlists as $chengbenlist)
                    @if($loop->first)
                        <a href="/{{$chengbenlist->arctype->real_path}}/{{$chengbenlist->id}}.html" target="_blank" class="fl"><img src="{{$chengbenlist->litpic}}" alt="{{$chengbenlist->title}}"></a>
                        <h3><a href="/{{$chengbenlist->arctype->real_path}}/{{$chengbenlist->id}}.html" target="_blank">{{str_limit($chengbenlist->title,38,'')}}</a></h3>
                        <p>{{str_limit($chengbenlist->description,160,'...')}}<a href="/{{$chengbenlist->arctype->real_path}}/{{$chengbenlist->id}}.html" target="_blank">[详细]</a></p>
                    @endif
                @endforeach
                <div class="both"></div>
            </div>
            <ul class="news_list">
                @foreach($chengbenlists as $chengbenlist)
                    @if(!$loop->first)
                        <li class="clo"><a href="/{{$chengbenlist->arctype->real_path}}/{{$chengbenlist->id}}.html" target="_blank">{{$chengbenlist->title}}</a></li>
                    @endif
                @endforeach
            </ul>
            <div class="both"></div>
        </div>
    </div>

    </div>
    {{--强势品牌--}}
    <div class="box4 m25">
        <div class="common_hd">
            <div class="tit"><img src="/frontend/images/anlijm.png" alt="加盟案列"></div>
            <div class="info"></div>
            <div class="more"><a href="javascript:void(0)" onclick="online()"><img src="/frontend/images/index_ask_btn.gif" alt="立即在线咨询"></a></div>
        </div>
        <div class="jmal">
            <dl>
                <dd>
                    <div class="tabbox dingwei"> <a href="#" ><img src="/frontend/images/1-1P619154344528.png" alt="奶茶加盟店投资不二茶铺实现财富自由">
                            <div class="tabtext">奶茶加盟店投资不二茶铺实现财富自由</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="#" ><img src="/frontend/images/1-1P619150H0U7.jpg" alt="办公文员开不二茶铺奶茶店兼职成主业">
                            <div class="tabtext">办公文员开不二茶铺奶茶店兼职成主业</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="#" ><img src="/frontend/images/1-1P619150353U0.jpg" alt="不二茶铺奶茶店加盟铸造财富人生">
                            <div class="tabtext">不二茶铺奶茶店加盟铸造财富人生</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="#" ><img src="/frontend/images/1-1P619150159423.GIF" alt="不二茶铺奶茶加盟带来成功和财富">
                            <div class="tabtext">不二茶铺奶茶加盟带来成功和财富</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="#" ><img src="/frontend/images/1-1P619145PS30.jpg" alt="投资不二茶铺奶茶加盟店成功就此起航">
                            <div class="tabtext">投资不二茶铺奶茶加盟店成功就此起航</div>
                        </a></div>
                </dd>


                <dd>
                    <div class="tabbox dingwei"> <a href="#" ><img src="/frontend/images/1-1P6191534031O.jpg" alt="奶茶品牌如何选择好的？">
                            <div class="tabtext">奶茶品牌如何选择好的？</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="#" ><img src="/frontend/images/1-1P619152SI04.png" alt="不二茶铺奶茶店加盟月入十万不是梦">
                            <div class="tabtext">不二茶铺奶茶店加盟月入十万不是梦</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="#" ><img src="/frontend/images/1-1P619151642545.GIF" alt="投资奶茶店加盟当老板活出精彩">
                            <div class="tabtext">投资奶茶店加盟当老板活出精彩</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="#" ><img src="/frontend/images/1-1P619151216113.GIF" alt="开奶茶店如何提高效益？">
                            <div class="tabtext">开奶茶店如何提高效益？</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="#" ><img src="/frontend/images/1-1P619151013525.GIF" alt="奶茶店加盟不二茶铺改变我的一生">
                            <div class="tabtext">奶茶店加盟不二茶铺改变我的一生</div>
                        </a></div>
                </dd>  <dd>
                    <div class="tabbox dingwei"> <a href="#" ><img src="/frontend/images/1-1P619151013526.GIF" alt="奶茶店加盟不二茶铺改变我的一生">
                            <div class="tabtext">奶茶店加盟不二茶铺改变我的一生</div>
                        </a></div>
                </dd>  <dd>
                    <div class="tabbox dingwei"> <a href="#" ><img src="/frontend/images/1-1P619151013527.GIF" alt="奶茶店加盟不二茶铺改变我的一生">
                            <div class="tabtext">奶茶店加盟不二茶铺改变我的一生</div>
                        </a></div>
                </dd>
            </dl>
        </div>
    </div>
    <div class="conta">
        <div class="clearfix">
            <div class="content f-l">
                <div class="fine-left-top clearfix">
                    <h4 class="f-l">友情链接</h4>
                </div>
                <div class="fine-left-bottom clearfix">
                    <ul class="yqlj_item">
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                        <li><a href="#" target="_blank"><i></i><b>友链测试模块</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div style="clear: both"></div>
    </div>

@stop
@section('footerlibs')
    <script src="/frontend/js/jquery.flexslider-min.js"></script>
    <script>
        $(function(){
            $('.brflixside').flexslider({
                directionNav: true,
                pauseOnAction: false
            });
        });
        $(document).ready(function(){
            $(".tabtext").hide();
            $(".tabbox").hover(function(){
                $(".tabtext",this).slideToggle(500);
            });
        });
        $('.index_jm_cont .index_jm_list').eq(0).show().siblings().hide();
        $('.index_jm_tab').each(function(){
            $('.index_jm_tab > ul >li').hover(function(){
                $(this).addClass('on').siblings().removeClass('on');
                $('.index_jm_cont .index_jm_list').eq($(this).index()).show().siblings().hide();
            }).eq(0).hover();
        });
    </script>
    <script src="/frontend/js/video.min.js"></script>
@stop