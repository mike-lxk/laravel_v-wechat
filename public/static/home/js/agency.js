// 代理合作提交表单
$(".submit_btn").click(function () {
    if ($('.tips-show-name').val() == '') {
        tips('请输入姓名', '.tips-show-name');
        return false;
    }
    if (!reg.test($('.tips-show-tel').val())) {
        tips('请输入正确的手机号码！', '.tips-show-tel');
        return false;
    }
    if ($('.tips-show-company').val() == '') {
        tips('请输入公司名称', '.tips-show-company');
        return false;
    }

    // 提交表单信息
    $.post('/agency', $("form").serialize(), function (result) {
        if (result.code == 200) {
            // 成功
            $(".submit_box").removeClass("hide");
            setTimeout(function () {
                location.reload();
            }, 2000)
        } else {
            layer.msg(result.msg, { icon: 2, time: 1500 });
            return;
        }
    }, 'json');

})

