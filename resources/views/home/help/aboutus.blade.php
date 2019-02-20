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

    <div class="about_us">
        <div class="us_img">
            <img src="/static/home/images/us.png" alt="">
            <span></span>
        </div>
    </div>
    <!-- 公司简介 -->
    <div class="company">
        <h3>公司简介</h3>
        <div class="company_title">—— COMPANY PROFILE ——</div>
        <div class="one_text">
            <p>南京百轩优信息技术有限公司是中国领先的移动应用解决方案提供商，通过整合数字营销、电子商务、品牌推广、网站建设等方面的领先优势，</p>
            <p>不断加强与阿里云计算、新网数码、华瑞网研的战略合作，为华东地区的服务合作伙伴，提供技术与应用支持。</p>
        </div>
        <div class="one_text">
            <p>百轩优为客户提供品牌网站设计制作，商城程序定制开发，APP开发，微信商城开发，包括后期产品运营招商、网络形象包装推广等全方位产品服务。</p>
            <p>通过利用自身积累的技术优势、行业经验，为企业和终端用户提供最符合产业发展趋势的互联网应用产品和服务解决方案。</p>
            <p>并与产品运营商、行业服务提供商、各渠道商等一起紧密合作，共同拓展市场，为客户提供深入而完善的服务，</p>
            <p>共同推进移动产业全面发展，实现共存共赢的目标而努力。</p>
        </div>
        <div class="one_text">
            <p>百轩优相信，近年迅猛发展的移动互联网浪潮将推动所有企业进行IT战略调整，移动互联将成为企业未来应用部署及数据访问的重要手段。</p>
            <p>移动信息化将不仅是一个附加的，或现有基础构架的一个补充，或是一个管理功能，而是即将成为一个标准的企业IT基础架构平台，</p>
            <p>需要全新的移动互联网思维去推动这次信息化变革。 </p>
        </div>
        <h3 class="teams">我们的团队</h3>
        <div class="company_title">—— OUR TEAM ——</div>
        <ul class="team_list">
            <li class="team_item">
                <h4>经验</h4>
                <div class="english_item">Experience</div>
                <p>丰富的产品案例实践<br>
                    玩转新营销</p>
            </li>
            <li class="team_item">
                <h4>专业</h4>
                <div class="english_item">Professional</div>
                <p>专注于移动互联网开发
                    <br>
                    数据向导用户</p>
            </li>
            <li class="team_item">
                <h4>信任</h4>
                <div class="english_item">Experience</div>
                <p>团队成员紧密配合
                    <br>
                    合理推进工作</p>
            </li>
            <li class="team_item">
                <h4>执行力</h4>
                <div class="english_item">Execution</div>
                <p>绝不拖延立即执行
                    <br>
                    保证完成任务</p>
            </li>
            <li class="team_item">
                <h4>创新</h4>
                <div class="english_item">Innovation</div>
                <p>潜心研究应用生态
                    <br>
                    精准把握产品</p>
            </li>
        </ul>
    </div>
    <!-- 联系我们 -->
    <div class="concat_us_wrap">
        <h3>联系我们</h3>
        <div class="company_title">—— CONTACT US ——</div>
        <ul class="concat_list">
            <li class="concat_item">
                <img src="/static/home/images/me01.png" alt="">
                <h4>公司地址</h4>
                <p>江苏省南京市鼓楼区汉中路120 <br>
                    号青华大厦</p>
            </li>
            <li class="concat_item">
                <img src="/static/home/images/me02.png" alt="">
                <h4>咨询电话</h4>
                <p>025-66078703
                    <br>
                    17715281181</p>
            </li>
            <li class="concat_item">
                <img src="/static/home/images/me03.png" alt="">
                <h4>企业邮箱</h4>
                <p>1935419541@qq.com <br>
                </p>
            </li>
        </ul>

        <img src="/static/home/images/map_img.jpg" alt="" class="map">
    </div>
    
    <!-- 引入底部 -->
    @include('home.pub.footer')

    <!-- 引入底部 -->
    
</body>

</html>