<header>
    <div class="header_box">
        <div class="container">
            <div class="logo_box  fl">
                <a href="/">
                    <img src="/static/home/images/logo_03.jpg">
                </a>
            </div>

            <div class="nav_box  fr">
                <div class="logoin_wrap  fr">
                    @empty(session('user'))
                        <!-- 登陆前 -->
                        <div class="logoin_btns">
                            <a href="{{url('login')}}" class="logoin_button">登陆</a>
                            <a href="{{url('register')}}" class="register_btn">注册</a>
                        </div>
                    @else
                        <!-- 登陆成功后 -->
                        <div class="user_box">
                            <a href="#" class="msg">消息</a>
                            <div class="user_succ">
                                <a href="#" class="head_pic">
                                    <img src="/static/home/images/look.jpg">
                                </a>
                                <dl class="logoin_member">
                                    <dd class="center"><a href="#"><i></i>个人中心</a></dd>
                                    <dd class="quit"><a href="#"><i></i>退出登陆</a></dd>
                                </dl>
                            </div>
                        </div>
                    @endempty
                </div>
                <ul class="nav_wrapper fr">
                    <li class="<?php if($index == 1) echo 'active'; ?>" >
                        <a href="/" title="首页" target="_self">首页</a>
                    </li>
                    <li class="nav_solution <?php if ($index == 2) echo 'active'; ?>">
                        <a href="javascript:;" title="解决方案" target="_blank" class="solution_text">解决方案</a>
                        <!-- 解决方案下拉效果 -->
                        <div class="solutions">
                            <ul class="clearfix">

                                <li class="solution_item  fl">
                                    <a href="{{url('solution/retail')}}">
                                        <span class="soluction_icons  solution_icon1  fl"></span>
                                        <div class="fl  solution_tip">
                                            <div>门店新零售解决方案</div>
                                            <p>实现网上和门店一体化营销</p>
                                        </div>
                                    </a>

                                </li>
                                <li class="solution_item  fl">
                                    <a href="{{url('solution/electronic')}}">
                                        <span class="soluction_icons  solution_icon2  fl"></span>
                                        <div class="fl  solution_tip">
                                            <div>电商解决方案</div>
                                            <p>让您三分钟拥有自己小程序店铺</p>
                                        </div>
                                    </a>

                                </li>
                                <li class="solution_item  fl">
                                    <a href="{{url('solution/brand')}}">
                                        <span class="soluction_icons  solution_icon3  fl"></span>
                                        <div class="fl  solution_tip">
                                            <div>品牌展示解决方案</div>
                                            <p>提升品牌形象，助力企业腾飞</p>
                                        </div>
                                    </a>

                                </li>
                                <li class="solution_item  fl">
                                    <a href="{{url('solution/manufacture')}}">
                                        <span class="soluction_icons  solution_icon4  fl"></span>
                                        <div class="fl  solution_tip">
                                            <div>制造行业解决方案</div>
                                            <p>打造数字化工厂，实现精益生产</p>
                                        </div>
                                    </a>

                                </li>

                                <li class="solution_item  fl">
                                    <a href="{{url('solution/wechat')}}">
                                        <span class="soluction_icons  solution_icon5  fl"></span>
                                        <div class="fl  solution_tip">
                                            <div>微商解决方案</div>
                                            <p>服务千万微商，让微商更简单</p>
                                        </div>
                                    </a>

                                </li>
                            </ul>

                            <div class="lines"></div>
                            <div class="consulting_phone">咨询电话：0571 - 8685 7988 | 周一到周日 9:00 ~ 18:00</div>
                        </div>
                    </li>
                    <li class="<?php if ($index == 3) echo 'active'; ?>">
                        <a href="{{url('agency')}}" title="代理合作" target="_self">代理合作</a>
                    </li>
                    <li class="<?php if ($index == 4) echo 'active'; ?>">
                        <a href="{{url('cases')}}" title="经典案列" target="_self">经典案列</a>
                    </li>
                    <li class="<?php if ($index == 5) echo 'active'; ?>">
                        <a href="{{url('help')}}" title="帮助中心" target="_self">帮助中心</a>
                    </li>

                </ul>
            </div>
        </div>

    </div>
</header>