<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
	<ol class="breadcrumb">
		<li><i class="fa fa-dashboard"></i> 位置</li>
		<li>
			售后管理	        
		</li>
		<li>售后列表</li>
		<li>售后详情</li>
	</ol>

	<div class=" order_detail box">
		<div class="box-body table-responsive no-padding ">
			<h4 class="order_type"> 
				售后状态: <span class="text-red"><strong><?php echo ($info['status']); ?></strong></span> 
			</h4>
			<h4 class="order_type"> 订单状态: <?php echo ($order_status); ?>			
			</h4>
		</div>
	</div>
			<!--发货信息-->
	<div class=" order_detail box" style="padding-bottom:20px;">
		<div class="box-header">
			<h4 class="order_type">退货信息</h4>
		</div>
		<div class="box-body table-responsive no-padding ship_border"> 
			<div class="order_type">
				<div class="shipping_info">
					<table cellspacing="0" cellpadding="0">
						<tr>
							<td rowspan="2" colspan="1" style="padding:0;"><img src="<?php echo ($a["img_path"]); ?>"></td>
							<td colspan="4" style="padding:0 10px;"><?php echo ($goods["goods_name"]); ?></td>
						</tr>
						<tr>
							<td colspan="4" style="padding:0 10px;"><?php echo ($goods["buyer_goods_no"]); ?></td>
						</tr>
					</table>
					<table cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding:0 10px;"><?php echo ($goods["sku"]); ?> </td>
							<td> 单价：￥<?php echo ($goods["shop_price"]); ?>；</td>
							<td> 数量：<?php echo ($goods["goods_num"]); ?> </td>
						</tr>
					</table>
				</div>			
			</div>
			<div class="order_type order_type_padding">
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td>发货时间：</td>
						<td><?php echo ($info["return_time"]); ?></td>
					</tr>
					<tr>
						<td>物流公司：</td>
						<td><?php echo ($info["company_name"]); ?></td>
					</tr>
					<tr>
						<td>运&nbsp;&nbsp;单&nbsp;&nbsp;号：</td>
						<td><?php echo ($info["shipping_code"]); ?></a> &nbsp;&nbsp; 
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class=" order_detail box">
		<div class="box-header">
			<h4 class="order_type">售后信息:</h4>
			<h4 class="order_type"></h4>
		</div>
		<div class="box-body table-responsive no-padding ">
			<div class="order_type">
				<p>售后单号：<?php echo ($info["id"]); ?></p>
				<p>售后时间：<?php echo ($info["addtime"]); ?></p>
				<p>售后类别：<?php echo ($info["cus_type"]); ?></p>
				<p>退货数量：<?php echo ($goods["goods_num"]); ?></p>
				<p style="color:red">退款金额：<?php echo ($info["show_refund"]); ?>元</p>
				<p>售后理由：<?php echo ($info["refund_reason"]); ?></p>
				<p>售后凭证:
					<?php if(is_array($imgs)): foreach($imgs as $key=>$q): ?><a href="<?php echo ($q["img_path"]); ?>" target="_blank"><img src="<?php echo ($q["img_thumb"]); ?>"></a><?php endforeach; endif; ?>
				</p>
				<p>
					<span style="float: left">申请说明：</span><textarea disabled="disabled" style="min-height:50px;background:#fff;border:1px solid #efefef"><?php echo ($info["remark"]); ?></textarea>
				</p>
			</div>
            <div class="order_type ">
                <p>平台审核时间：<?php echo ($info["verify_time"]); ?></p>   
                <p>供应商确认时间: <?php echo ($info["conf_time"]); ?></p>               
                <p>买家发货时间：<?php echo ($info["return_time"]); ?></p>   
                <p>供应商收货时间: <?php echo ($info["receipt_time"]); ?></p>                    
                <p>收到商品后：
                    <?php if($goods['goods_status']): ?><span><?php echo ($goods["goods_status"]); ?>；</span>
                        <span><span style="color:red">责任方</span>：<?php echo ($goods["responsible"]); ?>；</span>               
                        <span><span style="color:red">说明</span>：<?php echo ($goods["damaged"]); ?></span><?php endif; ?>   
                </p>
                <p>退款时间：<?php echo ($info["refund_money_time"]); ?></p>   <!--此处应该加一个字段，让财务来写入-->
                <p>平台仲裁时间: <?php echo ($info["arbitration_time"]); ?></p>
                <p>完成时间：<?php echo ($info["close_time"]); ?></p>
            </div> 
		</div>
	</div>


	<div class="box order_detail">
		<div class="box-header">
			<h3 class="box-title">售后操作日志</h3>
			<div class="box-tools">
				<div class="input-group order"></div>
			</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body table-responsive no-padding">
			<table class="table table-hover">
				<tr>
					<th>操作人</th>
					<th>操作内容</th>
					<th>操作时间</th>
					<th>系统备注</th>
				</tr>
				<?php if(is_array($logs)): foreach($logs as $key=>$q): ?><tr>
						<td><?php echo ($q["user_name"]); ?></td>
						<td><?php echo ($q["action"]); ?></td>
						<td><?php echo ($q["add_time"]); ?></td>
						<td><?php echo ($q["remark"]); ?></td>
					</tr><?php endforeach; endif; ?>			
			</table>
		</div>
	</div>
</section>