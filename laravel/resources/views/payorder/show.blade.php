@extends('layout')
@section('c')
    <h3>
        订单列表
    </h3>
    <div class="filter">
        <form action="{{url('payorder/search')}}" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input name="keyword" type="text" class="inpMain"  placeholder="请输入查询内容" size="20" />
            <input name="submit" class="btnGray" type="submit" value="筛选" />
        </form>
    </div>
    <div id="list">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <th width="50" align="center">分期订单id</th>
                <th width="50" align="center">支付状态</th>
                <th width="50" align="center">借款编号</th>
                <th width="50" align="center">国家</th>
                <th width="50" align="center">市</th>
                <th width="50" align="center">城市名</th>
                <th width="50" align="center">地区</th>
                <th width="50" align="center">详细地址</th>
                <th width="50" align="center">联系电话</th>
                <th width="50" align="center">分期订单价钱</th>
                <th width="50" align="center">用户id</th>
                <th width="50" align="center">创建时间</th>
                <th width="50" align="center">订单结束时间</th>
                <th width="50" align="center">期号 （第几期付款）</th>
                <th width="50" align="center">支付时间</th>
                <th width="50" align="center">还款时间</th>
                <th width="50" align="center">每月应还单价</th>

                <th align="center">操作</th>
            </tr>
            <volist name="list" id="vo">
                @foreach($data as $k=>$vo)
                <tr>
                    <td align="center">{{$vo->instalment_id}}</td>
                    <td align="center">{{$vo->pay_status}}</td>
                    <td align="center">{{$vo->country}}</td>
                    <td align="center">{{$vo->province}}</td>
                    <td align="center">{{$vo->city}}</td>
                    <td align="center">{{$vo->district}}</td>
                    <td align="center">{{$vo->address}}</td>
                    <td align="center">{{$vo->mobile}}</td>
                    <td align="center">{{$vo->add_numbers}}</td>
                    <td align="center">{{$vo->instalment_price}}</td>
                    <td align="center"><span id="span" title="{{$vo->user_id}}" style="cursor:pointer;" >{{$vo->user_id}}</span></td>
                    <td align="center">{{$vo->set_time}}</td>
                    <td align="center">{{$vo->finish_time}}</td>
                    <td align="center">{{$vo->futures}}</td>
                    <td align="center">{{$vo->pay_time}}</td>
                    <td align="center">{{$vo->refund_time}}</td>
                    <td align="center">{{$vo->unit}}</td>
                    <td align="center">
                        <a href="{{url('payorder/del')}}?instalment_id={{$vo->instalment_id}}">删除订单</a>
                    </td>
                </tr>
                @endforeach
            </volist>
        </table>
    </div>
    <div class="clear"></div>
    <div class="pager">
        @include('pagination.default', ['paginator' => $data])
    </div>
    </div>
    <script src="{{URL::asset('/')}}js/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){

            $(document).on('click','#span',function(){
                var obj = $(this);
                var id = obj.attr('title');
                $.ajax({
                    type:"get",
                    url:"seluser",
                    data:{id:id},
                    success:function(data){
//                        alert(data.error);return false;
                        var da = eval("(" + data+ ")");
                        var user_phone = da.user.user_phone;
                        obj.html(user_phone);
                    }
                });
            });
        });
    </script>
@stop