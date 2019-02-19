// 登陆页面跳转至忘记密码页面
$(".forget_psd").click(function () {
    $("#login_box").addClass("hide");
    $("#pswbox").removeClass("hide");
})


/************************************************ 登录相关 *********************************************************/

// 登陆验证
$(".tel").blur(function () {
    validatetel(".tips", ".tip_msg", $(this).val(), this);
})


// 登录提交
$('.login_submit').click(function () {
    // 验证手机号
    let checkTel = validatetel(".tips", ".tip_msg", $('.tel').val(), $('.tel'));

    // 验证通过并提交
    if (checkTel) {
        // 验证密码是否为空
        if ($("#psd").val() == '') {
            validatapwd(".tips1", ".tip_msg1", $('#psd'));
            return;
        }
        // 提交登录信息
        $.post('/login', $("#loginforms").serialize(), function (result) {
            if (result.code == 200) {
                // 登录成功
                layer.msg(result.msg, { icon: 1, time: 1500 }, function () {
                    window.location.href = 'http://laravel_wechat.test';
                });
            } else {
                layer.msg(result.msg, { icon: 2, time: 1500 });
                return;
            }
        }, 'json');
    }
})



/******************************************** 找回密码相关 ***********************************************************/

// 忘记密码验证
$(".tel2").blur(function () {
    validatetel(".tips2", ".tip_msg2", $(this).val(), this)
})

$(".psd2").blur(function () {
    validate(".tips3", ".tip_msg3", $(this).val(), this);
})


// 找回密码-发送验证码
$(".codes_num").click(function () {
    let obj = this;
    let checkTel = validatetel(".tips2", ".tip_msg2", $(".tel2").val(), $(".tel2"));
    if (checkTel) {
        // 获取验证码
        $.get('/common/getcode', { phone: $('.tel2').val() }, function (result) {
            if (result.code == 200) {
                // 调用验证码
                t = setInterval(function () {
                    invokeSettime(obj);
                }, 1000)

                layer.msg(result.msg, {
                    time: 1500
                });
            } else {
                layer.msg(result.msg, { icon: 2, time: 1500 });
                return;
            }
        }, 'json');
    }
})


// 找回密码
$(".submit_psd").click(function(){
    // 验证手机号
    let checkTel = validatetel(".tips2", ".tip_msg2", $('.tel2').val(), $('.tel2'));
    // 验证密码
    let checkPwd = validate(".tips3", ".tip_msg3", $('.psd2').val(), $('.psd2'));

    // 验证通过并提交
    if (checkTel && checkPwd) {

        // 验证验证码
        let code = $('input[name=code]').val();
        if (code == '') {
            layer.msg('请输入验证码', { icon: 2, time: 1500 });
            return;
        }

        // 判断验证码是否有效期
        $.get('/common/checkcode', { mobile_code: $('.tel2').val() + '-' + code }, function (res) {
            if (res.code == 201) {
                // 验证码恢复
                $('.codes_num').attr("disabled", false);
                $('.codes_num').html("点击获取验证码");
                $('.codes_num').css("background-color", '');
                countdown = 90;

                layer.msg(res.msg, { icon: 2, time: 1500 });
                return;
            } else {
                // 提交找回密码
                $.post('/forgot', $(".forget-form").serialize(), function (result) {
                    if (result.code == 200) {
                        // 密码修改成功
                        $("#pswbox").addClass("hide");
                        $("#success_psw").removeClass("hide");
                    } else {
                        layer.msg(result.msg, { icon: 2, time: 1500 },function(){
                            // 验证码恢复
                            $('.codes_num').attr("disabled", false);
                            $('.codes_num').html("点击获取验证码");
                            $('.codes_num').css("background-color", '');
                            countdown = 90;
                            // 清空input框的数据
                            $('.tel2').val('');
                            $('.psd2').val('');
                            $('input[name=code]').val('');
                            
                        });
                        return;
                    }
                }, 'json');
            }
        }, 'json');
    }
})