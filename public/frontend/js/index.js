function setHome(obj, url){
	if(typeof setHomePage =='function')
	{
			setHomePage(obj,'http://www.ysg.cn');
			return
	}
	try {
		obj.style.behavior = 'url(#default#homepage)';
		obj.setHomePage(url);				
	} 
	catch (e) {			
		alert("您的浏览器不支持设为首页，请手动设置！");
	};	
}

function AddFavorite(sURL, sTitle) {
	try {
		window.external.addFavorite(sURL, sTitle)
	} catch(e) {
		try {
			window.sidebar.addPanel(sTitle, sURL, "")
		} catch(e) {
			alert("加入收藏失败，请使用Ctrl+D进行添加")
		}
	}
}

$(function () {
	$(".menu ul > li").hover(function () {
		$(this).addClass("xl")
	}, function () {
		$(this).removeClass("xl")
	})
	$('.menu_xl a:last').addClass('qline');
	$(".menu>.box1>ul>li:last-child").hide();
});


$(function(){
	$('.tab1').each(function(){
		$('.tab-hd1 > ul >li').hover(function(){
			$(this).addClass('dq').siblings().removeClass('dq');
			$('.tab-bd1 dl').eq($(this).index()).show().siblings().hide();
		}).eq(0).hover();
	});

	$('.in_news li:eq(0)').addClass('red');
	$('.in_news li:eq(1)').addClass('blue');

 });

 
 $(function(){
	var dqurl = window.location.href;
	var dqkw1 = "gstd";
	var dqkw2 = "qywh";
	var dqkw3 = "ccwl";
	var dqkw4 = "news";
	var dqkw5 = "shengming";
	var dqkw6 = "xyys";
	var dqkw7 = "qspp";
	var dqkw8 = "yxys";
	var dqkw9 = "zbzc";
	var dqkw10 = "tiaojian";
	var dqkw11 = "yiwen";
	var dqkw12 = "lirun";
	var dqkw13 = "chengben";
	var dqkw14 = "wenda";
	var dqkw15 = "fengcai";
	var dqkw16 = "ganyan";
	var dqkw17 = "fenlei";
	var dqkw18 = "xinpin";

	if(dqurl.indexOf(dqkw1)> 0){
		$(".nava [href='/guanyuwomen/gstd/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw2)> 0){
		$(".nava [href='/guanyuwomen/qywh/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw3)> 0){
		$(".nava [href='/guanyuwomen/ccwl/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw4)> 0){
		$(".nava [href='/news/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw5)> 0){
		$(".nava [href='/shengming/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw6)> 0){
		$(".nava [href='/zhinan/xyys/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw7)> 0){
		$(".nava [href='/zhinan/qspp/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw8)> 0){
		$(".nava [href='/zhinan/yxys/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw9)> 0){
		$(".nava [href='/zhinan/zbzc/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw10)> 0){
		$(".nava [href='/tiaojian/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw11)> 0){
		$(".nava [href='/yiwen/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw12)> 0){
		$(".nava [href='/lirun/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw13)> 0){
		$(".nava [href='/chengben/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw14)> 0){
		$(".nava [href='/wenda/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw15)> 0){
		$(".nava [href='/fengcai/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw16)> 0){
		$(".nava [href='/ganyan/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw17)> 0){
		$(".nava [href='/products/fenlei/']").parent("li").addClass("dq");
	}else if(dqurl.indexOf(dqkw18)> 0){
		$(".nava [href='/xinpin/']").parent("li").addClass("dq");
	}
	 
 });