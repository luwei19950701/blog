<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; Charset=gb2312">
    <meta http-equiv="Content-Language" content="zh-CN">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>大傻逼 - 一个PHP程序员的个人博客网站</title>
    <link rel="shortcut icon" href="../home/images/Logo_40.png" type="image/x-icon">
    <!--Layui-->
    <link href="../home/plug/layui/css/layui.css" rel="stylesheet" />
    <!--font-awesome-->
    <link href="../home/plug/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!--全局样式表-->
    <link href="../home/css/global.css" rel="stylesheet" />
    <!-- 本页样式表 -->
    <link href="../home/css/home.css" rel="stylesheet" />

    <script data-pace-options='{ "ajax": false ,"eventLag": false}' src="../home/plug/pace.min.js"></script>

</head>
<body>
    @include('home.layouts.header')

    @yield('content')

    @include('home.layouts.footer')

    @include('home.layouts.nav')
    <!--分享窗体-->
    <div class="blog-share layui-hide">
        <div class="blog-share-body">
            <div style="width: 200px;height:100%;">
                <div class="bdsharebuttonbox">
                    <a class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                    <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    <a class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                </div>
            </div>
        </div>
    </div>
    <!--遮罩-->
    <div class="blog-mask animated layui-hide"></div>
    <!-- layui.js -->
    <script src="../home/plug/layui/layui.js"></script>
    <!-- 全局脚本 -->
    <script src="../home/js/global.js"></script>
    @yield('js')
</body>
</html>