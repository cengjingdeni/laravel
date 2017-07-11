<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <Somnus:sitecfg name="sitetitle"/> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content=" <Somnus:sitecfg name="sitedescription"/> ">
    <meta name="Keywords" content=" <Somnus:sitecfg name="sitekeywords"/> ">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/')}}home/css/mui.min.css">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/')}}home/css/mui.picker.css">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/')}}home/css/mui.poppicker.css">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/')}}home/css/newpay-bb7fcb5546.css">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/')}}home/css/feiqi-ee5401a8e6.css">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/')}}home/css/pay-2b02ca7987.css">
    <style>
        .mui-input-group .mui-input-row, .mui-input-row{
            height: 45px;
        }
        .marea{padding-right: 15px;}
        .regfrm label {
            padding: 14px 15px;
        }
        .marea label {
            padding: 14px 0;
        }
        .mui-input-row label~input, .mui-input-row label~select, .mui-input-row label~textarea {
            height: 45px;
            text-align: right;
        }
        .mui-input-row:last-child:after{
            height: 0;
        }
        @media screen and (max-width: 321px){
            .marea label {
                font-size: 14px;
                width: 24%;
                padding-top: 15px;
            }
            .marea label~input {
                width: 76%;
            }
            .regfrm .mui-input-row label {
                width: 24%;
                white-space: nowrap;
                font-size: 14px;
                padding: 15px 15px;
            }
            .regfrm .mui-input-row input {
                font-size: 14px;
                width: 74%;
            }
        }
        @media screen and (max-width: 350px){
            .marea label~input {
                font-size: 13px;
            }
        }
        .seltarr {
            display: block;
            position: absolute;
            top: 20px;
            right: 10px;
        }
    </style>
</head>
<body class="newbg">
<!-- header -->
<header class="mui-bar mui-bar-nav hnav">
    <a class="back" href="{{url('info/show')}}"></a>
    <h1 class="mui-title">基本信息</h1>
</header>
<!-- header end-->
<div class="mui-content">
    <!-- paymoney -->
    <article class="tipinfo">
        填写真实有效的信息，审核才会通过哦~
    </article>
    <div class="mui-input-group regfrm">
        <div class="mui-input-row">
            <label>姓名</label>
            <input type="text" id="usr" name="truename" class="mui-input-clear mui-input nofocus" value="{$userinfo.name}" placeholder="请输入真实的姓名" data-input-clear="2">
        </div>
        <div class="mui-input-row">
            <label>身份证号</label>
            <input id="percard" value="{$userinfo.usercard}" name="sfzhaoma" type="text" class="mui-input-clear mui-input nofocus" placeholder="请输入真实身份证号" data-input-clear="2">
        </div>
    </div>
    <article class="tipinfo">
        <p>*须本人身份证，且内容清晰可辨</p>
        <p>*请您确认拍照权限已开启</p>
    </article>
    <div class="mui-input-group regfrm">
        <link rel="stylesheet" href="{{URL::asset('/')}}html5/control/css/zyUpload.css" type="text/css">
        <script src="{{URL::asset('/')}}html5/jquery.min.js"></script>
        <!-- 引用核心层插件 -->
        <script src="{{URL::asset('/')}}html5/core/zyFile.js"></script>
        <!-- 引用控制层插件 -->
        <script src="{{URL::asset('/')}}html5/control/js/zyUpload.js"></script>
        <!-- 引用初始化JS -->
        <script src="{{URL::asset('/')}}html5/core/jq22.js"></script>
        <div id="demo" class="demo"></div>
    </div>
</div>
<section class="msub" style="position: relative;">
    <button type="button" class="mui-btn mui-btn-danger mui-button-pay mui-button-gry" onclick="saveInfo();">提交</button>
    <!-- 提示 -->
    <div style="display: none;position: absolute;" class="errdeo" id="messageBox">
    </div>
</section>
</div>
<script src="{{URL::asset('/')}}home/js/jquery-1-fe84a54bc0.11.1.min.js"></script>
<script src="{{URL::asset('/')}}home/js/stuCheck-ae09551939.js"></script>
<script src="{{URL::asset('/')}}home/js/geihuaCom-1088667498.js"></script>
<script src="{{URL::asset('/')}}home/js/mui.min.js"></script>
<script src="{{URL::asset('/')}}home/js/mui-bd98b45634.picker.js"></script>
<script src="{{URL::asset('/')}}home/js/mui-9fb36284ae.poppicker.js"></script>
<script src="{{URL::asset('/')}}home/js/city-564994092a.data.js" type="text/javascript" charset="utf-8"></script>
<script src="{{URL::asset('/')}}home/js/city-67f8c196d0.data-3.js" type="text/javascript" charset="utf-8"></script>


</body>
</html>