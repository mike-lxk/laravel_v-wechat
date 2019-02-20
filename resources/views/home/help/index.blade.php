<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/home/css/result.css">
    <link rel="stylesheet" href="/static/home/css/common.css">
    <link rel="stylesheet" href="/static/home/css/help_center.css">
    <link rel="icon" href="/static/home/images/header.ico">
    <title>帮助中心</title>
</head>

<body>
    
    <!-- 引入头部 -->
    @include('home.pub.header')
    <!-- 引入头部 -->

    <div class="help_center">
        <div class="container  clearfix">
            <ul class="help_center_l  fl">
                <li class="help_active">
                    <div class="first_menu  clearfix  active">
                        <span class="fl">新手入门</span>
                        <i class="fr"></i>
                    </div>
                    <ul class="two_menu ">
                        <li class="active">
                            <a href="javascript:;">如何开通小程序?</a>
                        </li>
                        <li>
                            <a href="javascript:;">如何开通小程序支付功能?</a>
                        </li>
                    </ul>
                </li>
                <li class="help_active">
                    <div class="first_menu  clearfix">
                        <span class="fl">管理后台</span>
                        <i class="fr"></i>
                    </div>
                    <ul class="two_menu  hide">
                        <li class="active">
                            <a href="javascript:;">111111?</a>
                        </li>
                        <li>
                            <a href="javascript:;">22222?</a>
                        </li>
                    </ul>
                </li>
                <li class="help_active">
                    <div class="first_menu  clearfix">
                        <span class="fl">常见问题</span>
                        <i class="fr"></i>
                    </div>
                    <ul class="two_menu  hide">
                        <li class="active">
                            <a href="javascript:;">3333?</a>
                        </li>
                        <li>
                            <a href="javascript:;">444444?</a>
                        </li>
                    </ul>
                </li>

            </ul>
            <div class="help_center_r fl">
                <img src="/static/home/images/help.jpg" alt="">
            </div>
        </div>
    </div>
    
    <!-- 引入底部 -->
    @include('home.pub.footer')
    <!-- 引入底部 -->
    
</body>

</html>