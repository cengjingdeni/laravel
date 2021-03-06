@extends('layout')
@section('c')
    <h3>
        <a href="{{url('block/add')}}" class="actionBtn add">
            添加自由块
        </a>
        添加自由块
    </h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
        <tr>
            <th width="30">ID</th>
            <th width="300" align="left">名称</th>
            <th width="140" align="left">添加时间</th>
            <th width="100" align="center">操作</th>
        </tr>
        <foreach name="data" item="vo">
            <tr>
                <td align="center">{$vo.id}</td>
                <td align="left">{$vo.name}</td>
                <td>{$vo.addtime|date="Y/m/d",###}</td>
                <td align="center">
                    <a href="{:U(GROUP_NAME.'/Block/edit',array('id'=>$vo['id']))}">编辑</a> |
                    <a href="javascript:delCat('{$vo.name}','{:U(GROUP_NAME.'/Block/del',array('id'=>$vo['id']))}');">删除</a>
                </td>
            </tr>
        </foreach>
    </table>
    <script>
        function delCat(name,jumpurl){
            layer.confirm(
                    '确定要删除自由块:['+name+']吗?',
                    function (){
                        window.location.href = jumpurl;
                    }
            );
        }
    </script>
@stop