@section('left')
<div id="dcLeft">
    <div id="menu">
        <ul class="top">
            <li>
                <a href="{{url('admin/admin')}}">
                    <i class="home"></i>
                    <em>管理首页</em>
                </a>
            </li>
        </ul>
        <ul>
            <li id="nav_System_index">
                <a href="{{url('system/show')}}">
                    <i class="system"></i>
                    <em>系统设置</em>
                </a>
            </li>
            <li id="nav_Admin_index">
                <a href="{{url('admin/user')}}">
                    <i class="manager"></i>
                    <em>网站管理员</em>
                </a>
            </li>
            <li id="nav_Block_index">
                <a href="{{url('block/show')}}">
                    <i class="theme"></i>
                    <em>自由块</em>
                </a>
            </li>
        </ul>
        <ul>
            <li id="nav_Article_catlist">
                <a href="{{url('article/article_cate')}}">
                    <i class="articleCat"></i>
                    <em>文章分类</em>
                </a>
            </li>
            <li id="nav_Article_index">
                <a href="{{url('article/article')}}">
                    <i class="article"></i>
                    <em>文章列表</em>
                </a>
            </li>
        </ul>
        <ul>
            <li id="nav_User_index">
                <a href="{:U('User/index')}">
                    <i class="user"></i>
                    <em>用户管理</em>
                </a>
            </li>
            <li id="nav_Daikuan_index">
                <a href="{{url('daikuan/show')}}">
                    <i class="product"></i>
                    <em>借款列表</em>
                </a>
            </li>
            <li id="nav_Huankuan_index">
                <a href="{{url('bills/show')}}">
                    <i class="guestbook"></i>
                    <em>还款列表</em>
                </a>
            </li>
            <li id="nav_Payorder_index">
                <a href="{{url('payorder/show')}}">
                    <i class="order"></i>
                    <em>订单列表</em>
                </a>
            </li>
        </ul>


    </div>
</div>
<script>
    //设置cur效果
    var MODULE_NAME = "{:MODULE_NAME}";
    var ACTION_NAME = "{:ACTION_NAME}";
    if(MODULE_NAME != "Main"){
        $("#nav_"+MODULE_NAME+"_"+ACTION_NAME).addClass("cur");
    }
</script>
@show