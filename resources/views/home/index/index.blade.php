<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/home/css/result.css">
    <link rel="stylesheet" href="/static/home/css/common.css">
    <link rel="stylesheet" href="/static/home/css/swiper.min.css">
    <link rel="stylesheet" href="/static/home/css/index.css">
    <link rel="icon" href="/static/home/images/header.ico">
    <title>V信小程序</title>
</head>

<body>
    <!-- 引入头部 -->
    @include('home.pub.header')
    <!-- 引入头部 -->

    <!-- 轮播图 -->
    <div class="main_wrapper">
        <div class="swiper-container  swiper-container1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/static/home/images/index_bgc.jpg">
                </div>
                <div class="swiper-slide">
                    <img src="/static/home/images/index_bgc.jpg">
                </div>
                <div class="swiper-slide">
                    <img src="/static/home/images/index_bgc.jpg">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination  swiper-pagination1"></div>
        </div>
    </div>
    <!-- 核心功能 -->
    <div class="core_function">
        <div class="core_title">
            <h3>核心功能</h3>
            <p>全新的用户体验，为实体企业打开了一扇大门</p>
        </div>
        <div class="core_content">
            <div class="container">
                <div class="swiper-container  swiper-container2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide  swiper-slide1">
                            <div href="javascript:;" class="cores_item">
                                <a class="cores_img">
                                    <img src="/static/home/images/core1.png" alt="">
                                </a>
                                <h4>电商系统</h4>
                                <p>商品展示、下单购买、会员卡、优惠券订单管理、账单明细</p>
                            </div>

                        </div>
                        <div class="swiper-slide  swiper-slide1">
                            <div href="javascript:;" class="cores_item">
                                <a class="cores_img">
                                    <img src="/static/home/images/core2.png" alt="">
                                </a>
                                <h4>预约服务</h4>
                                <p>弹性营业时间、精准预约、使用广泛
                                    自由定价、随时管理</p>
                            </div>
                        </div>
                        <div class="swiper-slide  swiper-slide1">
                            <div href="javascript:;" class="cores_item">
                                <a class="cores_img">
                                    <img src="/static/home/images/core3.png" alt="">
                                </a>

                                <h4>后台管理</h4>
                                <p>传统统计信息、访客分析、用户管理
                                    数据管理、商品信息</p>
                            </div>
                        </div>
                        <div class="swiper-slide  swiper-slide1">
                            <div href="javascript:;" class="cores_item">
                                <a class="cores_img">
                                    <img src="/static/home/images/core1.png" alt="">
                                </a>
                                <h4>电商系统</h4>
                                <p>商品展示、下单购买、会员卡、优惠券订单管理、账单明细</p>
                            </div>

                        </div>
                        <div class="swiper-slide  swiper-slide1">
                            <div href="javascript:;" class="cores_item">
                                <a class="cores_img">
                                    <img src="/static/home/images/core2.png" alt="">
                                </a>
                                <h4>预约服务</h4>
                                <p>弹性营业时间、精准预约、使用广泛
                                    自由定价、随时管理</p>
                            </div>
                        </div>
                        <div class="swiper-slide  swiper-slide1">
                            <div href="javascript:;" class="cores_item">
                                <a class="cores_img">
                                    <img src="/static/home/images/core3.png" alt="">
                                </a>

                                <h4>后台管理</h4>
                                <p>传统统计信息、访客分析、用户管理
                                    数据管理、商品信息</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Add Pagination -->
                <div class="  swiper-pagination   swiper-pagination2"></div>
            </div>

        </div>
    </div>

    <!-- 解决方案 -->
    <div class="solution_list">
        <div class="solution_title">
            <h3>解决方案</h3>
            <p>为您提供最全的小程序解决方案，请选择需要创建的类型</p>
        </div>
        <div class="container">
            <ul class="programme  clearfix">
                <li class="solution_items  fl  actives">
                    <h4>门店新零售解决方案</h4>
                    <p>实现网上和门店一体化营销</p>
                    <div class="solution_lines"></div>
                    <ul class="sol_item_text  clearfix">

                        <li> <i></i>商品管理</li>
                        <li> <i></i>新品推荐</li>
                        <li> <i></i>签到有奖</li>
                        <li> <i></i>物流配置</li>
                        <li> <i></i>限时秒杀</li>
                        <li> <i></i>商品管理</li>
                        <li> <i></i>新品推荐</li>
                        <li> <i></i>签到有奖</li>
                        <li> <i></i>物流配置</li>
                        <li> <i></i>限时秒杀</li>
                    </ul>
                    <div class="ellipsis">...</div>
                    <div class="immediately_btn  hide">立即生成</div>
                </li>
                <li class="solution_items  fl">
                    <h4>电商解决方案</h4>
                    <p>让您三分钟拥有自己小程序店铺</p>
                    <div class="solution_lines"></div>
                    <ul class="sol_item_text clearfix">
                        <li> <i></i>商品管理</li>
                        <li> <i></i>新品推荐</li>
                        <li> <i></i>签到有奖</li>
                        <li> <i></i>物流配置</li>
                        <li> <i></i>限时秒杀</li>
                        <li> <i></i>商品管理</li>
                        <li> <i></i>新品推荐</li>
                        <li> <i></i>签到有奖</li>
                        <li> <i></i>物流配置</li>
                        <li> <i></i>限时秒杀</li>
                    </ul>
                    <div class="ellipsis">...</div>
                    <div class="immediately_btn  hide">立即生成</div>
                </li>
                <li class="solution_items  fl">
                    <h4>品牌展示解决方案</h4>
                    <p>提升品牌形象，助力企业腾飞</p>
                    <div class="solution_lines"></div>
                    <ul class="sol_item_text  clearfix">
                        <li> <i></i>商品管理</li>
                        <li> <i></i>新品推荐</li>
                        <li> <i></i>签到有奖</li>
                        <li> <i></i>物流配置</li>
                        <li> <i></i>限时秒杀</li>
                        <li> <i></i>商品管理</li>
                        <li> <i></i>新品推荐</li>
                        <li> <i></i>签到有奖</li>
                        <li> <i></i>物流配置</li>
                        <li> <i></i>限时秒杀</li>
                    </ul>
                    <div class="ellipsis">...</div>
                    <div class="immediately_btn  hide">立即生成</div>
                </li>
                <li class="solution_items  fl">
                    <h4>制造行业解决方案</h4>
                    <p>提升品牌形象，助力企业腾飞</p>
                    <div class="solution_lines"></div>
                    <ul class="sol_item_text  clearfix">
                        <li> <i></i>商品管理</li>
                        <li> <i></i>新品推荐</li>
                        <li> <i></i>签到有奖</li>
                        <li> <i></i>物流配置</li>
                        <li> <i></i>限时秒杀</li>
                        <li> <i></i>商品管理</li>
                        <li> <i></i>新品推荐</li>
                        <li> <i></i>签到有奖</li>
                        <li> <i></i>物流配置</li>
                        <li> <i></i>限时秒杀</li>
                    </ul>
                    <div class="ellipsis">...</div>
                    <div class="immediately_btn  hide">立即生成</div>
                </li>
                <li class="solution_items  fl">
                    <h4>微商解决方案</h4>
                    <p>服务千万微商，让微商更简单</p>
                    <div class="solution_lines"></div>
                    <ul class="sol_item_text  clearfix">
                        <li> <i></i>商品管理</li>
                        <li> <i></i>新品推荐</li>
                        <li> <i></i>签到有奖</li>
                        <li> <i></i>物流配置</li>
                        <li> <i></i>限时秒杀</li>
                        <li> <i></i>商品管理</li>
                        <li> <i></i>新品推荐</li>
                        <li> <i></i>签到有奖</li>
                        <li> <i></i>物流配置</li>
                        <li> <i></i>限时秒杀</li>
                    </ul>
                    <div class="ellipsis">...</div>
                    <div class="immediately_btn  hide">立即生成</div>
                </li>
            </ul>
        </div>


    </div>
    <!-- 核心场景 -->
    <div class="core_scene">
        <div class="core_scene_title">
            <h3>核心场景</h3>
            <p>核心场景 企业的服务及展示， 在小程序中延伸</p>
        </div>
        <ul class="core_scene_list">
            <li>
                <span class="scence_icon  scence_icon1"></span>
                <div class="scence_text">带参数二维码引流</div>
            </li>
            <li>
                <span class="scence_icon  scence_icon2"></span>
                <div class="scence_text">带参数二维码引流</div>
            </li>
            <li>
                <span class="scence_icon  scence_icon3"></span>
                <div class="scence_text">带参数二维码引流</div>
            </li>
            <li>
                <span class="scence_icon  scence_icon4"></span>
                <div class="scence_text">带参数二维码引流</div>
            </li>
            <li>
                <span class="scence_icon  scence_icon5"></span>
                <div class="scence_text">带参数二维码引流</div>
            </li>
            <li>
                <span class="scence_icon  scence_icon6"></span>
                <div class="scence_text">带参数二维码引流</div>
            </li>
            <li>
                <span class="scence_icon  scence_icon7"></span>
                <div class="scence_text">带参数二维码引流</div>
            </li>
            <li>
                <span class="scence_icon  scence_icon8"></span>
                <div class="scence_text">带参数二维码引流</div>
            </li>
            <li>
                <span class="scence_icon  scence_icon9"></span>
                <div class="scence_text">带参数二维码引流</div>
            </li>
            <li>
                <span class="scence_icon  scence_icon10"></span>
                <div class="scence_text">带参数二维码引流</div>
            </li>
        </ul>
    </div>
    <!-- 适用用户 -->
    <div class="apply_users">
        <div class="users_title">
            <h3>适用用户</h3>
            <p>多行业商户适用的解决方案，无需安装，一键拥有，触手可及</p>
        </div>
        <ul class="users_list">
            <li>
                <img src="/static/home/images/u01.png" alt="">
                <p>新零售</p>
            </li>
            <li>
                <img src="/static/home/images/u02.png" alt="">
                <p>家政服务</p>
            </li>
            <li>
                <img src="/static/home/images/u03.png" alt="">
                <p>新餐饮</p>
            </li>
            <li>
                <img src="/static/home/images/u04.png" alt="">
                <p>服饰鞋包</p>
            </li>
            <li>
                <img src="/static/home/images/u05.png" alt="">
                <p>鲜花蛋糕</p>
            </li>
            <li>
                <img src="/static/home/images/u06.png" alt="">
                <p>机械制造</p>
            </li>
            <li>
                <img src="/static/home/images/u07.png" alt="">
                <p>装饰装修</p>
            </li>
            <li>
                <img src="/static/home/images/u08.png" alt="">
                <p>酒水饮料</p>
            </li>
            <li>
                <img src="/static/home/images/u09.png" alt="">
                <p>生产制造</p>
            </li>
            <li>
                <img src="/static/home/images/u10.png" alt="">
                <p>家居家纺</p>
            </li>
            <li>
                <img src="/static/home/images/u11.png" alt="">
                <p>日用百货</p>
            </li>
            <li>
                <img src="/static/home/images/u12.png" alt="">
                <p>亲子母婴</p>
            </li>
        </ul>
    </div>
    <!-- 我们的优势 -->
    <div class="advantage">
        <div class="users_title">
            <h3>我们的优势</h3>
            <p>专注小程序生态，为您提供优质的产品和专业的服务</p>
        </div>
        <ul class="advantage_list  clearfix">
            <li class="advantage_item  fl  active">
                <span class="advantage_icon  advantage_icon1"></span>
                <p>经验丰富</p>
                <div class="green_line"></div>
                <div class="advantage_text  hide">10年互联网经验<br> 国内领先小程序平台</div>
            </li>
            <li class="advantage_item  fl">
                <span class="advantage_icon  advantage_icon2"></span>
                <p>性价比高</p>
                <div class="green_line"></div>
                <div class="advantage_text  hide">产品极具性价比<br> 小程序优于行业水平</div>
            </li>
            <li class="advantage_item  fl">
                <span class="advantage_icon  advantage_icon3"></span>
                <p>简单易学</p>
                <div class="green_line"></div>
                <div class="advantage_text  hide">操作简单<br> 管理方便，一键提交</div>
            </li>
            <li class="advantage_item  fl">
                <span class="advantage_icon  advantage_icon4"></span>
                <p>服务稳定</p>
                <div class="green_line"></div>
                <div class="advantage_text  hide">服务稳定<br> 7*24小时在线客服支持</div>
            </li>
            <li class="advantage_item  fl">
                <span class="advantage_icon  advantage_icon5"></span>
                <p>极致体验</p>
                <div class="green_line"></div>
                <div class="advantage_text  hide">深度结合小程序<br> 架构为用户打造极致体验</div>
            </li>
        </ul>
    </div>
    <!-- 微信小程序精彩案列 -->
    <div class="wonderful_cases">
        <div class="users_title">
            <h3>微信小程序精彩案列</h3>
            <p>请用微信扫一扫查看</p>
        </div>
        <ul class="wonderful_list  clearfix">
            <li class="wonderful_item  fl  active">
                <img src="/static/home/images/look.jpg" alt="">
                <img src="/static/home/images/erwema.png" class="qr_code  hide" alt="">
                <p>互联网企业</p>
            </li>
            <li class="wonderful_item  fl">
                <img src="/static/home/images/look.jpg" alt="">
                <img src="/static/home/images/erwema.png" class="qr_code  hide" alt="">
                <p>互联网企业</p>
            </li>
            <li class="wonderful_item  fl">
                <img src="/static/home/images/look.jpg" alt="">
                <img src="/static/home/images/erwema.png" class="qr_code  hide" alt="">
                <p>互联网企业</p>
            </li>
            <li class="wonderful_item  fl">
                <img src="/static/home/images/look.jpg" alt="">
                <img src="/static/home/images/erwema.png" class="qr_code  hide" alt="">
                <p>互联网企业</p>
            </li>
        </ul>
        <a href="#" class="more_cases">更多案例>></a>

    </div>
    <!-- 开启小程序之旅 -->
    <div class="small_program">
        <div class="small_program_text1">小程序一键生成平台</div>
        <h2>开启小程序之旅</h2>
        <a href="#">立即生成</a>
    </div>
    
    <!-- 引入底部 -->
    @include('home.pub.footer')
    <!-- 引入底部 -->

    <!-- 回到顶部效果 -->
    <div class="go_top">
        <div class="aperture">
            <img src="/static/home/images/gq.png" alt="">
            <div class="consultant">
                <span>咨询·顾问</span>
            </div>
            <a href="#" class="kf">
                <span></span>
            </a>

        </div>

        <div class="gotop_btn">
            <i></i>
        </div>

    </div>
    
    <script src="/static/home/js/swiper.min.js"></script>
    <script>
        var swiper1 = new Swiper('.swiper-container1', {
            pagination: {
                el: '.swiper-pagination1',
                // slidesPerView: 'auto',
                observer: true, //修改swiper自己或子元素时，自动初始化swiper
                observeParents: true, //修改swiper的父元素时，自动初始化swiper
            },
            autoplay: {
                stopOnLastSlide: true
            },
            loop: true
        });


        var swiper2 = new Swiper('.swiper-container2', {
            slidesPerView: 3,
            spaceBetween: 60,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination2',
                clickable: true,
            },
            //      autoplay: {
            //     stopOnLastSlide: true
            // },
        });
    </script>
</body>

</html>