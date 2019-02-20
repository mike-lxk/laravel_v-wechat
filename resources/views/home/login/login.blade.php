<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/home/css/result.css">
    <link rel="stylesheet" href="/static/home/css/user.css">
    <link rel="icon" href="/static/home/images/header.ico">
    <title>登陆</title>
</head>

<body>

    <!-- 用户登陆 -->
    <div class="register  login  " id="login_box">
        <div class="register_left   fl">
            <h2>用户登陆</h2>
            <form action="" id="loginforms">
                {{csrf_field()}}
                <ul class="userRegLoginform  loginform">
                    <li>
                        <input type="text" name="phone" placeholder="输入手机号" class="tel">
                        <span class="tips  hide">
                            <i></i>
                            <b></b>
                            <em class="tip_msg"></em>
                        </span>
                    </li>
                    <li>
                        <input type="password" name="password" placeholder="请输入密码" id="psd">
                        <span class="tips1  hide">
                            <i></i>
                            <b></b>
                            <em class="tip_msg1"></em>
                        </span>
                    </li>
                    <div class="remember">
                        <input type="checkbox" checked="">
                        <span>
                            下次自动登陆
                        </span>

                    </div>

                    <li>
                        <input type="button" value="登陆" class="submit  login_submit">
                    </li>
                </ul>
                <a href="javascript:;" class="forget_psd">忘记密码</a>
            </form>
        </div>
        <div class="register_line   fl  login_line"></div>
        <div class="register_right  fl  login_right">
            <img src="/static/home/images/logo01.png" alt="">
            <p>还没有注册？</p>
            <div class="go_login">请点击 <a href="{{url('register')}}">新用户注册</a> </div>
        </div>
    </div>

    <!-- 忘记密码 -->
    <div class="register  login  hide" id="pswbox">
        <div class="register_left   fl   psd_left">
            <h2>找回密码</h2>
            <form action="" class="forget-form">
            {{csrf_field()}}
                <ul class="userRegLoginform  ">
                    <li>
                        <input type="text" name="phone" placeholder="输入手机号"  class="tel2">
                        <span class="tips2  hide">
                            <i></i>
                            <b></b>
                            <em class="tip_msg2"></em>
                        </span>
                    </li>
                    <li>
                        <input type="password" name="password" placeholder="输入新密码"  class="psd2">
                        <span class="tips3  hide">
                            <i></i>
                            <b></b>
                            <em class="tip_msg3"></em>
                        </span>
                    </li>

                    <li class="identifying_code  clearfix  passwords">
                        <input type="text" name="code" placeholder="在此输入验证码" class="fl">
                        <button class="fl  codes_num" type="button" >获取验证码</button>
                    </li>

                    <li>
                        <input type="button" value="提交" class="submit submit_psd">
                    </li>
                </ul>
            </form>
        </div>
        <div class="register_line   fl  login_line"></div>
        <div class="register_right  fl  login_right">
            <img src="/static/home/images/logo01.png" alt="">
            <div class="go_login   go_register">您还可以返回 <a href="{{url('register')}}">注册</a> </div>
        </div>
    </div>

    <!-- 找回密码成功 -->

    <div class="register  login  hide" id="success_psw">
        <div class="register_left   fl   psd_left">
            <h2>找回密码</h2>
            <img src="/static/home/images/succ.png" alt="" class="succ_img">
            <div class="succ_text">找回密码成功，即将转入登陆页面</div>
            <a href="{{url('login')}}" class="logoin_text">立即登陆</a>
        </div>
        <div class="register_line   fl  login_line"></div>
        <div class="register_right  fl  login_right">
            <img src="/static/home/images/logo01.png" alt="">
            <div class="go_login   go_register">您还可以返回 <a href="{{url('register')}}">注册</a> </div>
        </div>
    </div>

    <script src="/static/home/js/jquery.js"></script>
    <script src="/static/home/js/common.js"></script>
    <script src="/static/home/js/login.js"></script>
    <script src="/static/home/plugins/layer/2.4/layer.js"></script>

</body>

</html>