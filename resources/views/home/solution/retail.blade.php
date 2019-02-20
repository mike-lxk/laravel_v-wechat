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
    <title>门店新零售解决方案</title>
</head>

<body>
  
    <!-- 引入头部 -->
    @include('home.pub.header')
    <!-- 引入头部 -->

    <div class="banner_box">
        <a href="#">
            <img src="/static/home/images/xls.png" alt="">
        </a>

        <!-- 电商解决方案 -->
        <div class="electronic_solution">
            <h2>新零售解决方案</h2>
            <p>门店新零售解决方案是一款面向线下门店的一体化多渠道解决方案。</p>
            <p>门店以在线商城、客户管理、互动营销、数据分析、一键导入、分销系统、视频营销、导航进店在内的八大核心服务，</p>
            <p>实现线上线下商品、会员、场景的互联互通，助力企业快速实现营销、服务、效率转型升级步入移动电商。</p>
        </div>
    </div>

    <!-- 适用行业 -->
    <div class="industry_box">
        <div class="industry_title">
            <h3>适用行业</h3>
            <p>门店、服务、O2O企业等</p>
        </div>

        <ul class="industry_list  container  clearfix">
            <li class="industry_item  fl retail_item1 active">
                <div class="retail_icon   retail_icon1  fl"></div>
                <div class="fl">
                    <div class="industry_name">餐饮美食</div>
                    <p class="industry_english">FOOD AND BEVERAGE</p>
                </div>
            </li>
            <li class="industry_item  fl retail_item2 ">
                <div class="retail_icon   retail_icon2  fl"></div>
                <div class="fl">
                    <div class="industry_name">生鲜果蔬</div>
                    <p class="industry_english">FOOD AND BEVERAGE</p>
                </div>
            </li>
            <li class="industry_item  fl  retail_item3">
                <div class="retail_icon   retail_icon3  fl"></div>
                <div class="fl">
                    <div class="industry_name">酒店连锁</div>
                    <p class="industry_english">CHAIN HOTEL</p>
                </div>
            </li>
            <li class="industry_item  fl  retail_item4">
                <div class="retail_icon   retail_icon4  fl"></div>
                <div class="fl">
                    <div class="industry_name">家居装饰</div>
                    <p class="industry_english">HOME DECORATION</p>
                </div>
            </li>
            <li class="industry_item  fl  retail_item5">
                <div class="retail_icon   retail_icon5  fl"></div>
                <div class="fl">
                    <div class="industry_name">批发零售</div>
                    <p class="industry_english">WHOLESALE AND RETAIL</p>
                </div>
            </li>
            <li class="industry_item  fl   retail_item6">
                <div class="retail_icon   retail_icon6  fl"></div>
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
            <p>线上预约线下服务，建立线上线下互通体系</p>
        </div>

        <ul class="cores_list">
            <li class="core_items">
                <img src="/static/home/images/lsh01.png" alt="">
                <p>商品展示</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/lsh02.png" alt="">
                <p>多人拼团</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/lsh03.png" alt="">
                <p>会员管理</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/lsh04.png" alt="">
                <p>订单管理</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/lsh05.png" alt="">
                <p>多门店</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/lsh06.png" alt="">
                <p>会员管理</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/lsh07.png" alt="">
                <p>服务预约</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/lsh08.png" alt="">
                <p>在线支付</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/lsh09.png" alt="">
                <p>轮播管理</p>
            </li>
            <li class="core_items">
                <img src="/static/home/images/lsh10.png" alt="">
                <p>分销管理</p>
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
                <div class="set_meal_name  set_meal_name2">基础版套餐</div>
                <ul class="meal_list">
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">企业信息</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl blue_icon"></i>
                        <span class="fl">导航到店</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl blue_icon"></i>
                        <span class="fl">在线客服</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl blue_icon"></i>
                        <span class="fl">案列展示</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl blue_icon"></i>
                        <span class="fl">信息收集</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl blue_icon"></i>
                        <span class="fl">员工管理</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">案列展示</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">信息收集</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">员工管理</span>
                    </li>

                </ul>
                <div class="set_meal_price  set_meal_price2">3333元/年</div>
                <a href="javascript:;" class="immediately  immediately2">立即生成</a>
            </li>
            <li class="set_meal_item  fl">
                <div class="set_meal_name  set_meal_name2">豪华版套餐</div>
                <ul class="meal_list">
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">企业信息</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">导航到店</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">在线客服</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">案列展示</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">信息收集</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">员工管理</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">案列展示</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">信息收集</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">员工管理</span>
                    </li>
                    <li class="meal_item  clearfix">
                            <i class="fl  blue_icon"></i>
                            <span class="fl">员工管理</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl  blue_icon"></i>
                            <span class="fl">案列展示</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl  blue_icon"></i>
                            <span class="fl">信息收集</span>
                        </li>
                        <li class="meal_item  clearfix">
                            <i class="fl  blue_icon"></i>
                            <span class="fl">员工管理</span>
                        </li>
                </ul>
                <div class="set_meal_price  set_meal_price2">6666元/年</div>
                <a href="javascript:;" class="immediately  immediately2">立即生成</a>
            </li>
            <li class="set_meal_item  fl">
                <div class="set_meal_name  set_meal_name2">旗舰版套餐</div>
                <ul class="meal_list">
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">企业信息</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">导航到店</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">在线客服</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">案列展示</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">信息收集</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">员工管理</span>
                    </li>
                    <li class="meal_item  clearfix">
                        <i class="fl  blue_icon"></i>
                        <span class="fl">案列展示</span>
                    </li>


                </ul>
                <div class="set_meal_price  set_meal_price2">9999元/年</div>
                <a href="javascript:;" class="immediately  immediately2">立即生成</a>
            </li>
        </ul>
    </div>

    <!-- 开发流程 -->
    <div class="process">
        <h3>开发流程</h3>
        <img src="/static/home/images/xlsh.png" alt="">
    </div>
     <!-- 联系方式 -->
    <div class="concat_way  concat_way2">
        <div class="container  clearfix">
            <div class="telephone  fl">全国统一咨询热线：400-100-7282</div>
            <div class="concat_btn  fr">
               <a href="#"  class="concat_us1 concat_us3 fl">联系我们</a>
               <a href="#"  class="make  fl  make2">在线制作</a>
            </div>
        </div>
    </div>
 
    <!-- 引入底部 -->
    @include('home.pub.footer')
    <!-- 引入底部 -->

</body>

</html>