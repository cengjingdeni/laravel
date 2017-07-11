@section('header')
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>新闻管理中心</title>
    <meta name="New 7" content="Douco Design." />
    {{--<script language="JavaScript" src="{{ URL::asset('/') }}js/jquery-1.8.2.min.js"></script>--}}
    <link href="{{ URL::asset('/') }}css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{ URL::asset('/') }}js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('/') }}js/global.js"></script>
</head>
<body>
<div id="dcWrap"> <div id="dcHead">
    <div id="head">
        <div class="logo"><a href=""><img src="{{ URL::asset('/') }}image/dclogo.gif" alt="logo"></a></div>
        <div class="nav">
            <ul>
                <li class="M"><a href="JavaScript:void(0);" class="topAdd">新建</a>
                    <div class="drop mTopad">
                        <a href="">新闻</a>
                        <a href="">视频</a>
                        <a href="">活动</a>
                        <a href="">广告</a>
                        <a href="">管理员</a>
                    </div>
                </li>
                <li><a href="">联系我们</a></li>
                <li class="noRight"><a href=""></a></li>
            </ul>
            <ul class="navRight">
                <li class="M noLeft"><a href="JavaScript:void(0);">您好，Admin</a>
                    <div class="drop mUser">
                        <a href="">编辑我的个人资料</a>
                    </div>
                </li>
                <li class="noRight"><a href="/login/history">退出</a></li>
            </ul>
        </div>
    </div>
</div>
@show
