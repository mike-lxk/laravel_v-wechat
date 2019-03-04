// 手机验证机制
var reg = /^1(3|4|5|7|8|9)\d{9}$/;

// 密码验证机制
var reg3 = /^[a-zA-Z0-9]{6,12}$/;


// 登陆成功后展示下拉到会员中心的效果
$(".user_succ").hover(function () {
    $(this).find(".logoin_member").stop().slideDown()
}, function () {
    $(this).find(".logoin_member").stop().slideUp()
})

// 解决方案下拉菜单
$(".nav_solution").hover(function () {
    $(this).find(".solutions").stop().slideDown()
}, function () {
    $(this).find(".solutions").stop().slideUp()
})

// 首页解决方案
$(function () {
    $(".solution_items").mouseover(function () {
        $(this).addClass("actives").siblings().removeClass("actives");
    })
})
// 首页我们的优势
$(function () {
    $(".advantage_item").mouseover(function () {
        $(this).addClass("active").siblings().removeClass("active");
    })
})
// 微信小程序精彩案列
$(function () {
    $(".wonderful_item  ").mouseover(function () {
        $(this).addClass("active").siblings().removeClass("active");
    })
})

// 首页返回顶部功能
$(".gotop_btn").on("click", function () {
    $('html,body').animate({
        scrollTop: 0
    }, 400);
})


// 电商解决方案
$(function () {
    $(".industry_item").mouseover(function () {
        $(this).addClass("active").siblings().removeClass("active");
    })
})
// 电商解决方案-超值套餐
$(function () {
    $(".set_meal_item  ").mouseover(function () {
        $(this).addClass("active").siblings().removeClass("active");
    })
})

// 经典案列鼠标经过展示详情
$(function () {
    $('.case_item').click(function () {
        $('.mask_box,.case_infos').removeClass('hide');
    })
    $('.close').click(function () {
        $('.mask_box,.case_infos').addClass('hide');
    })
    $('.mask_box').click(function () {
        $('.mask_box,.case_infos').addClass('hide');
    })
})

/**
 * input框的提示信息【蓝色】
 * @param string name  提示信息
 * @param string classname   类名
 */
function tips(name, classname) {
    layer.tips(name, classname, {
        tips: [2, '#4eb6ff'],
        time: 1000
    });
}


// 代理合作-合作优势
$(".advantagefour_item").mouseover(function () {
    tabSwitch(this, "active", ".all_advantage")
})
// tab切换封装
function tabSwitch(obj, obj1, obj2) {
    $(obj).addClass(obj1).siblings().removeClass(obj1)
    var i = $(obj).index()
    $(obj2).children().eq(i).css('display', 'block').siblings().css(
        'display', 'none')
}


// 帮助中心菜单栏切换
$(".help_active>div").click(function () {
    // $(this).toggleClass("active");  
    // $(this).next().toggle();  
    var iclass = $(this).attr("class");
    if (iclass == "active") {
        $(this).next().hide();
    } else {
        $(this).addClass("active").next().show()
            .parent().siblings()
            .children(".first_menu").removeClass("active").next().hide();
        return false;
    }
})

$(".two_menu>li").click(function () {
    $(this).addClass("active").siblings().removeClass("active");
})

// 验证码倒计时间
var countdown = 90;

// 验证码倒计时
function invokeSettime(obj) {
    if (countdown == 0) {
        $(obj).attr("disabled", false);
        $(obj).html("点击获取验证码");
        $(obj).css("background-color", '');
        countdown = 90;
        clearInterval(t);
        return false;
    } else {
        $(obj).attr("disabled", true);
        $(obj).css("background-color", "grey");
        $(obj).html(countdown + "秒之后点击获取");
        countdown--;
    }
}

// 验证手机号
function validatetel(tip, tipmsg, telvalue, obj) {
    if (!reg.test(telvalue)) {
        $(tip).removeClass("hide");
        $(tipmsg).html("请输入正确的手机号码！");
        $(obj).val("");
        setTimeout(function () {
            $(tip).addClass("hide");
        }, 2000)
        return false;
    } else {
        return true;
    }
}


// 验证密码
function validate(tip, tipmsg, telvalue, obj) {
    if (!reg3.test(telvalue)) {
        $(tip).removeClass("hide");
        $(tipmsg).html("请设置6-12位的数字、字母组合的密码！");
        $(obj).val("");
        setTimeout(function () {
            $(tip).addClass("hide");
        }, 2000)
        return false;
    } else {
        return true;
    }
}


// 提示密码不得为空
function validatapwd(tip, tipmsg, obj){
    $(tip).removeClass("hide");
    $(tipmsg).html("密码不能为空！");
    $(obj).val("");
    setTimeout(function () {
        $(tip).addClass("hide");
    }, 2000)
    return false;
}