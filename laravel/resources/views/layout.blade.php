<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> 超级后台 </title>
    <link href="{{ URL::asset('/') }}main/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{ URL::asset('/') }}main/js/jquery.min.js"></script>
    <link href="{{ URL::asset('/') }}css/public.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="{{ URL::asset('/') }}js/global.js"></script>

    <script type="text/javascript" src="{{ URL::asset('/') }}main/js/global.js"></script>
    <script type="text/javascript" src="{{ URL::asset('/') }}main/js/jquery.tab.js"></script>
    <script src="{{ URL::asset('/') }}layer/layer.js"></script>
</head>
<body>
<div id="dcWrap">
    <div class="clear"></div>
    {{--<include file='Public/footer' />--}}
    @extends('layout.footer')
            <!-- dcFooter 结束 -->
    <div class="clear"></div>

    @extends('layout.content')
    {{--@yield('content')--}}

    @extends('layout.left')
    {{--<include file="Public/header" />--}}
    @extends('layout.header')
    <!-- dcHead 结束 -->
    {{--<include file="Public/left" />--}}




</div>
</body>
</html>