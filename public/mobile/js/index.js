/**
 * Created by liang on 2016/8/22.
 */
$(function(){
    $(".zonghe-nav li").click(function(){
        $(this).children(".zonghe-con").css("display","block");
        $(this).siblings().children(".zonghe-con").css("display","none");
        $(this).children("a").attr("class","zonghe-nav-moren");
        $(this).siblings().children("a").removeAttr("class","zonghe-nav-moren");
    })
})

$(function(){

    $("#content img").addClass("img-responsive center-block").css('height','auto').css('border-radius','5px');
})


$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#tj_btn").click(function(){
        var phoneno = $("#phonenum").val();
        var name = $("#guestname").val();
        var note = $("#note").val();
        var host=window.location.href;
        if(!name)
        {
            alert('请输入你们的姓名方便我们与您联系')
        }else{
            if( phoneno  && /^1[3|4|5|8]\d{9}$/.test(phoneno ) ){
                $.ajax({
                    type:"POST",
                    url:"/phonecomplate/",
                    //dataType: 'JSON',
                    data:{"phoneno":phoneno,"host":host,"name":name,"note":note},
                    datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".
                    success:function (response, stutas, xhr) {
                        alert(response);
                        $("#tj_btn").attr("disabled","disabled");
                    }
                });
            } else{
                alert("您输入的手机号码"+phoneno+"不正确，请重新输入")
            }
        }
    })
});