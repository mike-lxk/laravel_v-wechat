<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/home/css/result.css">
    <link rel="stylesheet" href="/static/home/css/jigsaw.css">
    <link rel="stylesheet" href="/static/home/css/user.css">
    <link rel="icon" href="/static/home/images/header.ico">
    <title>注册</title>
</head>

<body>
    <div class="register">
        <div class="register_left   fl">
            <h2>新用户注册</h2>
            <form action="">
            {{csrf_field()}}
                <ul class="userRegLoginform">
                    <li>
                        <input type="text" name="phone" placeholder="请输入您的手机号"  class="tel4">
                        <span class="tips4  hide">
                                <i></i>
                                <b></b>
                                <em class="tip_msg4"></em>
                            </span>
                    </li>
                    <li>
                        <input type="password" name="password" placeholder="请输入密码"  class="psd5">
                        <span class="tips5  hide">
                                <i></i>
                                <b></b>
                                <em class="tip_msg5"></em>
                            </span>
                    </li>
                    <li>
                        <div id="captcha" style="position: relative" ></div>
                    </li>
                    <li class="identifying_code  clearfix">
                        <input type="text" name="code" placeholder="在此输入验证码" class="fl">
                        <button type="button" class="fl getyzm_in" disabled>获取验证码</button>
                    </li>
                    <div class="remember">
                        <input class="choose-agreement" type="checkbox"  checked="">
                        <span>同意
                            <a href="javascript:;" class="agreement">《适用条款和协议》</a>
                        </span>

                    </div>

                    <li>
                       <input type="button"   value="注册"  class="submit register_submit">
                    </li>
                </ul>

            </form>
        </div>
        <div class="register_line   fl"></div>
        <div class="register_right  fl ">
            <img src="/static/home/images/logo01.png" alt="">
            <p>已有账户？</p>
            <div class="go_login">请点击  <a  href="{{url('login')}}">用户登录</a> </div>
        </div>
    </div>
    <script src="/static/home/js/jquery.js"></script>
    <script src="/static/home/js/common.js"></script>
    <script src="/static/home/js/jigsaw.js"></script>
    <script src="/static/home/plugins/layer/2.4/layer.js"></script>
    <script src="/static/home/js/register.js"></script>

</body>

</html>