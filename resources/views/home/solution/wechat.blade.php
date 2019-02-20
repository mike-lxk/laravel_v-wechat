<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/home/css/result.css">
    <link rel="stylesheet" href="/static/home/css/common.css">
    <link rel="stylesheet" href="/static/home/css/solution.css">
    <link rel="icon" href="/static/home/images/header.ico">
    <title>微商解决方案</title>
</head>
<body>
    <!-- 引入头部 -->
    @include('home.pub.header')
    <!-- 引入头部 -->

    <div class="banner_box">
        <a href="#">
            <img src="/static/home/images/wsh.png" alt="">
        </a>

        <!-- 微商解决方案 -->
        <div class="electronic_solution">
            <h2>微商解决方案</h2>
            <p>传统微商在动态展示，发布朋友圈很容易被屏蔽，而且需要自己的好友够多才能够展示。</p>
            <p>而通过微商小程序解决方案， 微商发布的动态出了可以在朋友圈展示，也可以分享给好友/微信群。</p>
        </div>
    </div>

    <!-- 适用行业 -->
    <div class="industry_box">
        <div class="industry_title">
            <h3>适用行业</h3>
            <p>无论传统电商、自媒体电商、还是线下商户，都能满足您的需求</p>
        </div>

        <ul class="industry_list  container  clearfix">
            <li class="industry_item  fl wechat_item1 active">
                <div class="weachat_icon   weachat_icon1  fl"></div>
                <div class="fl">
                    <div class="industry_name">美容护肤</div>
                    <p class="industry_english">BEAUTY AND SKIN CARE</p>
                </div>
            </li>
            <li class="industry_item  fl wechat_item2 ">
                <div class="weachat_icon   weachat_icon2  fl"></div>
                <div class="fl">
                    <div class="industry_name">清洁洗护</div>
                    <p class="industry_english">CLEAN AND CLEAN</p>
                </div>
            </li>
            <li class="industry_item  fl  wechat_item3">
                <div class="weachat_icon   weachat_icon3  fl"></div>
                <div class="fl">
                    <div class="industry_name">健康私护</div>
                    <p class="industry_english">HEALTH CARE</p>
                </div>
            </li>
            <li class="industry_item  fl  wechat_item4">
                <div class="weachat_icon   weachat_icon4  fl"></div>
                <div class="fl">
                    <div class="industry_name">服饰鞋包</div>
                    <p class="industry_english">CLOTHES & SHOES & PAG</p>
                </div>
            </li>
            <li class="industry_item  fl  wechat_item5">
                <div class="weachat_icon   weachat_icon5  fl"></div>
                <div class="fl">
                    <div class="industry_name">美容美发</div>
                    <p class="industry_english">HAIRDRESSING BEAUTY</p>
                </div>
            </li>
            <li class="industry_item  fl   wechat_item6">
                <div class="weachat_icon   weachat_icon6  fl"></div>
                <div class="fl">
                    <div class="industry_name">全行业</div>
                    <p class="industry_english">WHOLE INDUSTRY</p>
                </div>
            </li>

        </ul>
    </div>
    <!-- 核心功能 -->
    <div class="cores_wrap">
        <div class="industry_title">
            <h3>核心功能</h3>
            <p>产品宣传/动态发布/产品展示</p>
        </div>

        <ul class="cores_list">
            <li class="core_items">
                <img src="/static/home/images/ws03.png" alt="">
                <p>微商动态</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/ws04.png" alt="">
                <p>轮播管理</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/ws01.png" alt="">
                <p>定位导航</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/ws05.png" alt="">
                <p>小视频</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/ws02.png" alt="">
                <p>消息通知</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/ws06.png" alt="">
                <p>商品展示</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/ws07.png" alt="">
                <p>订单管理</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/ws08.png" alt="">
                <p>在线支付</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/ws09.png" alt="">
                <p>营销推广</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/ws10.png" alt="">
                <p>在线客服</p>
            </li>
    
        </ul>
    </div>
    <!-- 全面的门店经营管理功能 -->
    <div class="store_wrap">
        <div class="industry_title">
            <h3>全面的门店经营管理功能</h3>
            <p>在线开店系统，帮您快速拓展客源，提高店铺收益</p>
        </div>
        <div class="store_img">
            <img src="/static/home/images/store_img.png" alt="">
        </div>
    </div>
      <!-- 超值套餐 -->
      <div class="set_meal">
            <div class="industry_title">
                <h3>超值套餐</h3>
                <p>你可以根据需求选择不同版本的新零售套餐</p>
            </div>
            <ul class="set_meal_list  container  clearfix">
                <li class="set_meal_item  fl  active">
                    <div class="set_meal_name  set_meal_name1">基础版套餐</div>
                    <ul class="meal_list">
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">企业信息</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">导航到店</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">在线客服</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">案列展示</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">信息收集</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">员工管理</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">案列展示</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">信息收集</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">员工管理</span>
                        </li>
    
                    </ul>
                    <div class="set_meal_price  set_meal_price1">3333元/年</div>
                    <a href="javascript:;" class="immediately  immediately1">立即生成</a>
                </li>
                <li class="set_meal_item  fl">
                    <div class="set_meal_name  set_meal_name1">豪华版套餐</div>
                    <ul class="meal_list">
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">企业信息</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">导航到店</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">在线客服</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">案列展示</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">信息收集</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">员工管理</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">案列展示</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">信息收集</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">员工管理</span>
                        </li>
                        <li class="meal_item  clearfix">
                                <i class="fl green_icon"></i>
                                <span class="fl">员工管理</span>
                            </li>
                            <li class="meal_item  clearfix">
                                <i class="fl green_icon"></i>
                                <span class="fl">案列展示</span>
                            </li>
                            <li class="meal_item  clearfix">
                                <i class="fl green_icon"></i>
                                <span class="fl">信息收集</span>
                            </li>
                            <li class="meal_item  clearfix">
                                <i class="fl  green_icon"></i>
                                <span class="fl">员工管理</span>
                            </li>
                    </ul>
                    <div class="set_meal_price  set_meal_price1">6666元/年</div>
                    <a href="javascript:;" class="immediately  immediately1">立即生成</a>
                </li>
                <li class="set_meal_item  fl">
                    <div class="set_meal_name  set_meal_name1">旗舰版套餐</div>
                    <ul class="meal_list">
                        <li class="meal_item  clearfix">
                            <i class="fl  green_icon"></i>
                            <span class="fl">企业信息</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl  green_icon"></i>
                            <span class="fl">导航到店</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl  green_icon"></i>
                            <span class="fl">在线客服</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl  green_icon"></i>
                            <span class="fl">案列展示</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl green_icon"></i>
                            <span class="fl">信息收集</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl  green_icon"></i>
                            <span class="fl">员工管理</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl  green_icon"></i>
                            <span class="fl">案列展示</span>
                        </li>
    
    
                    </ul>
                    <div class="set_meal_price  set_meal_price1">9999元/年</div>
                    <a href="javascript:;" class="immediately  immediately1">立即生成</a>
                </li>
            </ul>
        </div>
      <!-- 开发流程 -->
      <div class="process">
            <h3>开发流程</h3>
            <img src="/static/home/images/ppzs.png" alt="">
        </div>
         <!-- 联系方式 -->
        <div class="concat_way  concat_way1">
            <div class="container  clearfix">
                <div class="telephone  fl">全国统一咨询热线：400-100-7282</div>
                <div class="concat_btn  fr">
                   <a href="#"  class="concat_us1  concat_us2  fl">联系我们</a>
                   <a href="#"  class="make make1 fl">在线制作</a>
                </div>
            </div>
        </div>

    <!-- 引入底部 -->
    @include('home.pub.footer')
    <!-- 引入底部 -->
    
</body>

</html>