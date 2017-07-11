@extends('layout')
@section('c')
    <h3>
        <a href="{{url('article/add')}}" class="actionBtn add">
            添加文章
        </a>
        文章列表
    </h3>
    <div class="filter">
        <form action="{:U(GROUP_NAME.'/Article/index')}" method="post">
            <select name="cat_id">
                <option value="0" <IF condition="$cat_id eq 0">selected</IF> > 全部</option>
                <volist name="catlist" id="vo">
                    <option value="{$vo.id}" <IF condition="$cat_id eq $vo['id']">selected</IF> > {$vo.name}</option>
                </volist>
            </select>
            <input name="keyword" type="text" class="inpMain" value="{$keyword}" size="20" />
            <input name="submit" class="btnGray" type="submit" value="筛选" />
        </form>
    </div>
    <div id="list">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <th width="40" align="center">ID</th>
                <th align="left">文章名称</th>
                <th width="150" align="center">文章分类</th>
                <th width="60">排序</th>
                <th width="80" align="center">添加日期</th>
                <th width="80" align="center">操作</th>
            </tr>
            <volist name="list" id="vo">
                @foreach($data as $k=>$vo)
                <tr>
                    <td align="center">{{$vo->id}}</td>
                    <td>{{$vo->title}}</td>
                    <td align="center">{{$vo->catname}}</td>
                    <td align="center">{{$vo->sort}}</td>
                    <td align="center">{{date("Y-m-d H:i:s",$vo->addtime)}}</td>
                    <td align="center">
                        <a href="{:U(GROUP_NAME.'/Article/edit',array('id'=>$vo['id']))}">编辑</a> |
                        <a href="javascript:del('{$vo.title}','{:U(GROUP_NAME.'/Article/del',array('id'=>$vo['id']))}');">删除</a>
                    </td>
                </tr>
                @endforeach
            </volist>
        </table>
    </div>
    <div class="clear"></div>
    <div class="pager">
        {$page}
    </div>
    </div>
    <script>
        function del(title,jumpurl){
            layer.confirm(
                    '确定要删除文章:'+title+'吗?',
                    function (){
                        window.location.href = jumpurl;
                    }
            );
        }
    </script>
@stop