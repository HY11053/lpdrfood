<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link href="/frontend/css/css.css" rel="stylesheet" type="text/css" />
    <link href="/frontend/css/index-news.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/frontend/js/jquery.js"></script>
    <script type="text/javascript" src="/frontend/js/index.js"></script>
    @yield('headlibs')
</head>
<body>
<div class="header">
    <div class="box1">
        <div class="header_l png">
            <div class="logo"><a href="{{config('app.url')}}"><img src="/frontend/images/buerlogo.jpg"  alt="不二茶铺零食量贩"/></a></div>
            <div class="h_sc"><a href="javascript:void(0)" onclick="javascript:AddFavorite(window.location, document.title)">收藏不二茶铺</a></div>
        </div>
        <div class="h_wz"><img src="/frontend/images/buerabout.png" class="png" width="133" height="58" /></div>
        <div class="h_dianhua">7x24H免费热线：400-160-5877</div>
        <div class="tonghua"><a href="javascript:void(0)" onclick="online()">免费通话</a></div>
    </div>
</div>
<div class="menu">
    <div class="box1">
        <ul>
            <li><a href="/">首页</a></li>
            <li><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',1)->value('typename')}}</a></li>
            <li><a href="/{{\App\AdminModel\Arctype::where('id',8)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',8)->value('typename')}}</a></li>
            <li><a href="/{{\App\AdminModel\Arctype::where('id',9)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',9)->value('typename')}}</a></li>
            <li><a href="/{{\App\AdminModel\Arctype::where('id',10)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',10)->value('typename')}}</a></li>
            <li><a href="/{{\App\AdminModel\Arctype::where('id',11)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',11)->value('typename')}}</a></li>
            <li><a href="/{{\App\AdminModel\Arctype::where('id',12)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',12)->value('typename')}}</a></li>
            <li><a href="/{{\App\AdminModel\Arctype::where('id',13)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',13)->value('typename')}}</a></li>
            <li><a href="/{{\App\AdminModel\Arctype::where('id',14)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',14)->value('typename')}}</a></li>
        </ul>
    </div>
</div>
@yield('main_content')
<div class="footer_nav">
    <div class="h_box"> <a href="/" title="不二茶铺加盟">网站首页</a> <a href="/{{\App\AdminModel\Arctype::where('id',2)->value('real_path')}}/"  title="{{\App\AdminModel\Arctype::where('id',2)->value('typename')}}">{{\App\AdminModel\Arctype::where('id',2)->value('typename')}}</a> <a href="/{{\App\AdminModel\Arctype::where('id',3)->value('real_path')}}/"  title="{{\App\AdminModel\Arctype::where('id',3)->value('typename')}}">{{\App\AdminModel\Arctype::where('id',3)->value('typename')}}</a> <a href="/{{\App\AdminModel\Arctype::where('id',9)->value('real_path')}}/"  title="{{\App\AdminModel\Arctype::where('id',9)->value('typename')}}">{{\App\AdminModel\Arctype::where('id',9)->value('typename')}}</a> <a href="/{{\App\AdminModel\Arctype::where('id',4)->value('real_path')}}/"  title="{{\App\AdminModel\Arctype::where('id',4)->value('typename')}}">{{\App\AdminModel\Arctype::where('id',4)->value('typename')}}</a> </div>
</div>
<div class="footer">
    <div class="h_box">
        <div class="clearfix">
            <div class="footer_logo"><img src="/frontend/images/foot_logo.png" class="png" /></div>
            <div class="footer_dh"> <span><img src="/frontend/images/foot_dh.png" width="229" height="49" class="png" /></span> </div>
            <div class="footer_wx"> <img src="/frontend/images/foot_wx.png" width="101" height="101" class="png" />
                <p>手机轻松扫一扫<br />
                    关注不二茶铺<br />
            </div>
        </div>
        <div class="footer_wz">
            <p>上海莎福瑞餐饮管理有限公司 版权所有 2006-2019 <a href="http://www.miitbeian.gov.cn" style="color:#B25900" rel="nofollow">沪ICP备1500558997号</a> </p>
            <p>友情提示:投资有风险，选择需谨慎！</p>
            <p>电话： 400-160-5877 传真：021-00000000 邮政编码:200236</p>
            <p>地址:上海市宝山区共和新路5000弄绿地风尚6号楼1603室</p>
        </div>
    </div>
</div>
@yield('footerlibs')
</body>
</html>
