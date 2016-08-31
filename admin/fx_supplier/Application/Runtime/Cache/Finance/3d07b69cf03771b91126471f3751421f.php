<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
    <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> 位置</li>
        <li>财务管理</li>
        <li>收支明细</li>
    </ol>
    <div class="box-body fqy_jsgl fqy_txgl">
        <p><b>账户余额：<?php echo session('user_info.balance');?></b></p>

        <div class="row">
            <form class="form-inline" method="get" action="<?php echo U(ACTION_NAME, I('get.'));?>" id="searchForm">
                <div class="form-group">类型:
                    <select name="trade_type">
                        <option value="">——请选择——</option>
                        <option value="1" <?php echo xeq(I('get.trade_type'), 1, 'selected');?>>打款</option>
                        <option value="2" <?php echo xeq(I('get.trade_type'), 2, 'selected');?>>提现</option>
<!--                        <option value="3" <?php echo xeq(I('get.trade_type'), 3, 'selected');?>>售后退款</option>-->
                        <option value="4" <?php echo xeq(I('get.trade_type'), 4, 'selected');?>>完结订单</option>
<!--                        <option value="5" <?php echo xeq(I('get.trade_type'), 5, 'selected');?>>下单</option>-->
                        <option value="6" <?php echo xeq(I('get.trade_type'), 6, 'selected');?>>充值</option>
                        <option value="7" <?php echo xeq(I('get.trade_type'), 7, 'selected');?>>补款</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName2">完成时间:</label>
                    <div class="form-group">
                        <input type="text" class="form-control input-xs" value="<?php echo I('get.startTime');?>" placeholder='开始时间' onClick="WdatePicker()" name="startTime">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-xs" value="<?php echo I('get.endTime');?>" onClick="WdatePicker()" name="endTime" placeholder='结束时间'>
                    </div>
                </div>

                <div class="form-group btnBox">
                    <input type="submit" class="btn btn-block btn-warning btn-xs" value="搜索">
                    <input type="hidden" name="allData" value="0">
                    <input type="hidden" class="explode_goods_input" name="explodeGoods[]" value="0">
                    <input type="hidden" name="explode_goods" value="0">
                </div>
            </form>
        </div>

        <div class="row fqy_szmx">
            <span>收入：<b class="fqy_green"><?php echo ($in_money); ?></b> 元</span> &nbsp;&nbsp;&nbsp;
            <span>支出：<b class="fqy_red"><?php echo ($out_money); ?></b> 元</span>
        </div>

        <div class="row">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>交易号</th>
                        <th>时间</th>
                        <th>类型</th>
                        <th>收入（元）</th>
                        <th>支出（元）</th>
                        <th>账户余额</th>
                    </tr>
                <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["trade_no"]); ?></td>
                        <td><?php echo (date('Y-m-d H:m:s',$vo["add_time"])); ?> </td>
                        <td>
                            <?php if(($vo["trade_type"]) == "1"): ?>打款<?php endif; ?>
                            <?php if(($vo["trade_type"]) == "2"): ?>提现<?php endif; ?>
                            <?php if(($vo["trade_type"]) == "3"): ?>售后退款<?php endif; ?>
                            <?php if(($vo["trade_type"]) == "4"): ?>完结订单<?php endif; ?>
                            <?php if(($vo["trade_type"]) == "5"): ?>下单<?php endif; ?>
                            <?php if(($vo["trade_type"]) == "6"): ?>充值<?php endif; ?>
                            <?php if(($vo["trade_type"]) == "7"): ?>补款<?php endif; ?>
                        </td>
                        <td class="fqy_sr"><?php echo ($vo["in_money"]); ?></td>
                        <td><?php echo ($vo["out_money"]); ?></td>
                        <td><?php echo ($vo["now_balance"]); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>

        <div class="box-footer">
            <div class="left">
                <form class="form-inline" id="pagesizeForm" action="<?php echo U(ACTION_NAME, I('get.'));?>" method="get">
                    <div class="form-group">
                        <select name="pagesize" class="form-control input-xs pagesize">
                            <option <?php echo xeq(I('get.pagesize'), 20, 'selected');?> value="20">20条</option>
                            <option <?php echo xeq(I('get.pagesize'), 50, 'selected');?> value="50">50条</option>
                            <option <?php echo xeq(I('get.pagesize'), 100, 'selected');?> value="100">100条</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="right">
                <div class="pagination"><?php echo ($pager); ?></div>
            </div>
        </div>
</section>