
// 注册相关**************************************************************************************************************

// 注册时滑动拼图验证码
$(function () {
    // 图片验证码
    jigsaw.init(document.getElementById('captcha'), function () {
        // 回调【验证成功后，解锁获取验证码按钮】
        $(".getyzm_in").attr('disabled', false);
    })
})


// 注册验证
$(".tel4").blur(function () {
    validatetel(".tips4", ".tip_msg4", $(this).val(), this)
})

$(".psd5").blur(function () {
    validate(".tips5", ".tip_msg5", $(this).val(), this);
})


// 注册-发送验证码
$(".getyzm_in").click(function () {

    let obj = this;

    // 验证手机号是否存在
    let check = validatetel(".tips4", ".tip_msg4", $('.tel4').val(), $('.tel4'));

    if (check) {
        // 验证手机号是否已注册
        $.get('/common/checktel', { phone: $('.tel4').val()}, function (res) {
            if (res.code == 200) {
                // 获取验证码
                $.get('/common/getcode', { phone: $('.tel4').val() }, function (result) {
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
            } else {
                layer.msg(res.msg, { icon: 2, time: 1500 });
                return;
            }
        }, 'json');
    }

})


// 注册提交
$(".register_submit").click(function () {
    // 验证手机号
    let checkTel = validatetel(".tips4", ".tip_msg4", $('.tel4').val(), $('.tel4'));
    // 验证密码
    let checkPwd = validate(".tips5", ".tip_msg5", $(".psd5").val(), $(".psd5"));

    // 验证通过并提交
    if (checkTel && checkPwd) {

        // 验证验证码
        let code = $('input[name=code]').val();
        if (code == '') {
            layer.msg('请输入验证码', { icon: 2, time: 1500 });
            return;
        }

        // 判断是否已同意协议
        if ($(".choose-agreement").prop('checked') == false) {
            layer.msg('请同意《适用条款和协议》', { icon: 2, time: 1500 });
            return;
        }

        // 判断验证码是否有效期
        $.get('/common/checkcode', { mobile_code: $('.tel4').val() + '-' + code }, function (res) {
            if (res.code == 201) {
                layer.msg(res.msg, { icon: 2, time: 1500 });
                return;
            } else {
                // 提交注册信息
                $.post('/register', $("form").serialize(), function (result) {
                    if (result.code == 200) {
                        // 注册成功，跳转至首页【登录问题一并解决】
                        layer.msg(result.msg, {icon:1, time: 1500},function(){
                            window.location.href = 'http://laravel_wechat.test';
                        });
                    } else {
                        layer.msg(result.msg, { icon: 2, time: 1500 });
                        return;
                    }
                }, 'json');
            }
        }, 'json');
    }

})




