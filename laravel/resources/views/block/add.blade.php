@extends('layout')
@section('c')
    <h3>
        <a href="{{url('block/show')}}" class="actionBtn add">
            返回列表
        </a>
        返回列表
    </h3>
    <div class="idTabs">
        <div class="items">
            <form action="{:U(GROUP_NAME.'/Block/add')}" method="post">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td align="right">名称</td>
                        <td>
                            <input type="text" name="name" value="" size="30" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">内容</td>
                        <td>
                            <textarea name="cont" cols="60" rows="4" class="textArea"></textarea>
                        </td>
                    </tr>
                </table>
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td width="131"></td>
                        <td>
                            <input class="btn" type="submit" value="提交" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@stop