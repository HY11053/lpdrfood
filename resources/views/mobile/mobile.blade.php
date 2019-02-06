<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="wap-font-scale" content="no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="applicable-device" content="mobile">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="Cache-Control" content="no-cache"/>
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link href="/mobile/css/bootstrap.min.css" rel="stylesheet">
    <link href="/mobile/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/mobile/css/bootstrap-theme.min.css">
    @yield('headlibs')
</head>
<body>
<nav class="navbar navbar-default" style="margin:0px; padding:0px; position:relative;" >

    <div style="line-height:0;"><img src="/mobile/images/logo.jpg" width="100%"/></div>

    <div class="navbar-header" >
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" style="position:absolute; right:0; top:14px;" >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="/">首页</a></li>
            <li><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',1)->value('typename')}}</a></li>
            <li><a href="/{{\App\AdminModel\Arctype::where('id',2)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',2)->value('typename')}}</a></li>
            <li><a href="/{{\App\AdminModel\Arctype::where('id',9)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',9)->value('typename')}}</a></li>
            <li><a href="/{{\App\AdminModel\Arctype::where('id',10)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',10)->value('typename')}}</a></li>
            <li><a href="/{{\App\AdminModel\Arctype::where('id',11)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',11)->value('typename')}}</a></li>
            <li><a href="/{{\App\AdminModel\Arctype::where('id',12)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',12)->value('typename')}}</a></li>
            <li><a href="/{{\App\AdminModel\Arctype::where('id',13)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',13)->value('typename')}}</a></li>
        </ul>
    </div>

</nav>
@yield('main_content')
<div id="item5" class="clearfix">
    <div class="item5box">
        <i></i>
        <div class="title">在线留言</div>
        <form onsubmit="return false;">
            <div class="inputbox">
                <input type="text" name="username" id="guestname" value="" placeholder="您的真实姓名">
                <span>姓名：</span>
                <div class="tip">*姓名不可以为空</div>
            </div>
            <div class="inputbox">
                <input type="tel" name="iphone" id="phonenum" value="" placeholder="电话是与您联系的重要方式">
                <span>手机：</span>
                <div class="tip">*不是完整的11位手机号或者正确的手机号前七位</div>
            </div>
            <div class="inputbox">
                <input type="text" name="note" id="note" value="" placeholder="我对此项目很感兴趣，请联系我。">
                <span>留言：</span>
                <div class="tip">*留言不可以为空</div>
            </div>
            <button type="submit" id="tj_btn" class="submitmessagebtn">提交留言</button>
        </form>
        <div class="lysm">
            本站为资讯展示网站，本网页信息来源互联网，本平台不保证信息的真实性，请用户自行与商家联系核对真实性。此次留言将面向网站内所有页面项目产生留言。
        </div>
    </div>
</div>
<script src="/mobile/js/jquery.min.js"></script>
<script src="/mobile/js/bootstrap.min.js"></script>
<script src="/mobile/js/index.js"></script>
</body>
</html>
