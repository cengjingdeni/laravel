@extends('layout')
@section('c')
    <h3>系统设置</h3>
    <script type="text/javascript">
        $(function(){ $(".idTabs").idTabs(); });
    </script>
    <div class="idTabs">
        <ul class="tab">
            <li><a href="#main">常规设置</a></li>
            <li><a href="#daikuan">贷款设置</a></li>
            <li><a href="#api">接口设置</a></li>
        </ul>
        <div class="items">
            <form action="{:U(GROUP_NAME.'/System/index')}" method="post">
                <div id="main">
                    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                        <tr>
                            <th width="131">名称</th>
                            <th>内容</th>
                        </tr>
                        <tr>
                            <td align="right">站点名称</td>
                            <td>
                                <input type="text" name="sitename" value="{:C('cfg_sitename')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">站点标题</td>
                            <td>
                                <input type="text" name="sitetitle" value="{:C('cfg_sitetitle')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">站点地址</td>
                            <td>
                                <input type="text" name="siteurl" value="{:C('cfg_siteurl')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">站点关键字</td>
                            <td>
                                <input type="text" name="sitekeywords" value="{:C('cfg_sitekeywords')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">站点描述</td>
                            <td>
                                <input type="text" name="sitedescription" value="{:C('cfg_sitedescription')}" size="80" class="inpMain" />
                            </td>
                        </tr>

                        <tr>
                            <td align="right">是否关闭网站</td>
                            <td>
                                <label for="siteclosed_0">
                                    <input type="radio" name="siteclosed" id="siteclosed_0" value="0"  >
                                    否
                                </label>
                                <label for="siteclosed_1">
                                    <input type="radio" name="siteclosed" id="siteclosed_1" value="1"  >
                                    是
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">网站关闭提示</td>
                            <td>
                                <textarea name="siteclosemsg" cols="83" rows="8" class="textArea" />{:C('cfg_siteclosemsg')}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">ICP备案证书号</td>
                            <td>
                                <input type="text" name="siteicp" value="{:C('cfg_siteicp')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">统计/客服代码调用</td>
                            <td>
                                <textarea name="sitecode" cols="83" rows="8" class="textArea" />{:C('cfg_sitecode')}</textarea>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-------------->
                <div id="daikuan">
                    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                        <tr>
                            <th width="131">名称</th>
                            <th>内容</th>
                        </tr>
                        <tr>
                            <td align="right">贷款最小金额</td>
                            <td>
                                <input type="text" name="minmoney" value="{:C('cfg_minmoney')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">贷款最大金额</td>
                            <td>
                                <input type="text" name="maxmoney" value="{:C('cfg_maxmoney')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">初始显示金额</td>
                            <td>
                                <input type="text" name="definamoney" value="{:C('cfg_definamoney')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">允许选择月份</td>
                            <td>
                                <input type="text" name="dkmonths" value="{:C('cfg_dkmonths')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">初始选择月份</td>
                            <td>
                                <input type="text" name="definamonth" value="{:C('cfg_definamonth')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">服务费率</td>
                            <td>
                                <input type="text" name="fuwufei" value="{:C('cfg_fuwufei')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">借款审核费用</td>
                            <td>
                                <input type="text" name="shenhefei" value="{:C('cfg_shenhefei')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">每月还款日</td>
                            <td>
                                <input type="text" name="huankuanri" value="{:C('cfg_huankuanri')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">是否自动拒绝</td>
                            <td>
                                <label for="siteclosed_0">
                                    <input type="radio" name="autodisdk" id="autodisdk_0" value="0" <if condition="C('cfg_autodisdk') eq 0">checked</if> >
                                    否
                                </label>
                                <label for="siteclosed_1">
                                    <input type="radio" name="autodisdk" id="autodisdk_1" value="1" <if condition="C('cfg_autodisdk') eq 1">checked</if> >
                                    是
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">自动拒绝天数</td>
                            <td>
                                <input type="text" name="autodisdkday" value="{:C('cfg_autodisdkday')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">拒绝提交等待天数</td>
                            <td>
                                <input type="text" name="disdkdleyday" value="{:C('cfg_disdkdleyday')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="api">
                    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                        <tr>
                            <th width="131">名称</th>
                            <th>内容</th>
                        </tr>
                        <tr>
                            <td align="right">短信宝网关</td>
                            <td>
                                <input type="text" name="SMS_API" value="{:C('cfg_SMS_API')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">短信宝用户名</td>
                            <td>
                                <input type="text" name="SMS_USER" value="{:C('cfg_SMS_USER')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">短信宝密码</td>
                            <td>
                                <input type="text" name="sms_pass" value="{:C('cfg_sms_pass')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">当日获取最大次数</td>
                            <td>
                                <input type="text" name="smsmaxcount" value="{:C('cfg_smsmaxcount')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">支付商户号</td>
                            <td>
                                <input type="text" name="payuserseller" value="{:C('cfg_payuserseller')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">支付PID</td>
                            <td>
                                <input type="text" name="client_id" value="{:C('cfg_client_id')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">支付KEY码</td>
                            <td>
                                <input type="text" name="client_secret" value="{:C('cfg_client_secret')}" size="80" class="inpMain" />
                            </td>
                        </tr>
                    </table>
                </div>


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
    </div>
@stop