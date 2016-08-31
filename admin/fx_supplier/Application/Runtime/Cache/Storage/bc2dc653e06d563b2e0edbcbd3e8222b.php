<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
	.dalog-modal{
		width: 100%;
		height: 100%;
		position: fixed;
		background: rgba(0,0,0,0.5);
		display: none;
		top: 0;
		left: 0;
		z-index: 999;
	}
	.dalog-container{
		width: 1000px;
		position: absolute;
		top:50%;
		left: 50%;
		margin-left: -500px;
		margin-top: -200px;
		background: #fff;
		opacity: 1;
		z-index: 9999;
	}
	.dalog-container table{
		width: 100%;
	}
	.dalog-container table th{
		height: 40px;
		background: #f39c12;
		text-align: center;
		color: #fff;
	}
	.dalog-container table td{
		height: 40px;
		text-align: center;
	}
	.dalog-container span{
		display: inline-block;
		text-align: right;
	}
	.dalog-modal{
		display: none;
	}
	.dalog-modal .g-modal-content.add-entrepot input[type="text"]{
		margin: 0;
		position: relative;
	}
	.dalog-modal .g-modal-content.add-entrepot label strong{
		margin: 0 10px;
		color: #FF2015;
		display: inline;
	}
	.dalog-modal h2{
		padding: 10px 0;
		text-align: center;
	}
	.modal-content{
		padding: 10px 0;
		font-family: "microsoft yahei";
	}
	.dalog-modal  label{
		width: 200px;
		width: 100%;
		padding: 10px 40px;
	}
	.dalog-modal label.error{
		width: 244px;
	}
	.modal-content label span{
		display: inline-block;
		width: 100px;
		text-align: right;
	}
	.dalog-modal .close{
		position: absolute;
		top: 0;
		right: 0;
		padding: 5px;
	}
	.dalog-modal .close:hover{
		cursor: pointer;
		width: 40px;
		height: 40px;
		background: #888888;
		border-radius: 5px;
		border-top-left-radius: 0;
		border-bottom-right-radius: 0;
	}
	.sub-btn{
		text-align: center;
		padding: 20px 0;
	}
	.sub-btn input{
		width: 150px;
		height: 40px;
		background: rgb(33,119,199);
		border: none;
		border-radius: 5px;
		box-shadow: 0 2px 2px #888888;
		color: #fff;
		font-family: "microsoft yahei";
		font-size: 20px;
		margin: 0 10px;
	}
	.sub-btn .abolish{background: #0097BC;}
	.sub-btn input:hover{
		box-shadow: 0 0 10px #888888;
		cursor: pointer;
	}
	.redact span{display: block;float: left;}
	.redact a{display: block;float: left;margin-left: 10px;}
.redact-adress{display: none; width: 300px;background: #fff;/*border: 1px solid #555555;*/}
.redact-adress input{margin-left: 10px;}
.s-select{width: 100%;}
.data-peaker{margin-bottom: 10px}
#add-new{position: absolute;top:-40px;right: 20px}
#e-must{display:none;}
</style>
<div class="box-body">
	<div class="row">
		<form class="form-inline" method="get" action="<?php echo U('storage/freight/index');?>" id="searchForm">
			<div class="form-group">模板名称:
				<input type="text" name="key" value="<?php if($_GET['key']){echo $_GET['key'];}?>" class="form-control input-xs" placeholder="请输入模板名称">
			</div>
			<div class="form-group btnBox">
				<input type="submit" class="btn btn-block btn-warning btn-xs" value="搜索">
			</div>
		</form>	
	</div>
	<div class="row" style="position:relative">
		<a id="add-new" href="#aleatMoudle" class="btn btn-success" >新增模板</a>
		<table class="table table-hover">
			<tbody>
				<tr>
					<th>名称</th>
					<th>计价方式</th>
					<th>是否包邮</th>
					<th>默认首重（kg）</th>
					<th>默认首重（元）</th>
					<th>默认续重（kg）</th>
					<th>默认续重（元）</th>
					<th>是否有特殊计费区域</th>
					<th>操作</th>
				</tr>
				<?php if(is_array($list)): foreach($list as $key=>$q): ?><tr>
						<td><?php echo ($q["name"]); ?></td>
						<td>重量</td>
						<td><?php echo ($q["is_free"]); ?></td>
						<td><?php echo ($q["start_heavy"]); ?></td>
						<td><?php echo ($q["start_freight"]); ?></td>
						<td><?php echo ($q["continue_heavy"]); ?></td>
						<td><?php echo ($q["continue_freight"]); ?></td>
						<td><?php echo ($q["special"]); ?></td>
						<td><a href="<?php echo U('storage/freight/detail', ['id'=>$q['id']]);?>">详情</a>	</td>
					</tr><?php endforeach; endif; ?>	
			</tbody>	
		</table>
	</div>
	<div class="box-footer">
		<div id="kkpager">
		</div>
	</div>
</div>


<div class="dalog-modal" id="aleatMoudle">
	<div class="dalog-container">
		<h2>新增物流模板</h2>
		<div class="g-modal-content">
			<form method="post" action="<?php echo U('storage/freight/add');?>" >
				<label><span>模板名称：</span><input type="text" name="name" value="" />计价方式：<sapn>按重量</sapn></label>
				<label><span>是否包邮：</span>
				<input type="radio" name="is_free" value="1" class="e-free" />是
				<input type="radio" name="is_free" value="0" checked="checked" class="e-not-free" />否</label>
				<label id="e-must"><span>默认运费：</span>
					<input class="freight" type="text" name="start_heavy" id="" value="" />
					kg以内，<input class="freight" type="text" name="start_freight" id="" value="" />
					元;
					&nbsp;&nbsp;&nbsp;&nbsp;每增加<input class="freight" type="text" name="continue_heavy" id="" value="" />
					kg，增加运费<input class="freight" type="text" name="continue_freight" id="" value="" />
					元
				</label>
				<label for="">
					<table class="red-table">
						<tr>
							<th style="width:30%">配送地区</th>
							<th>首重（kg）</th>
							<th>首费（元）</th>
							<th>续重（kg）</th>
							<th>续费（元）</th>
							<th>操作</th>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						<td ><a href="javascript:;" id="Darea" style="float:right">增加特殊地区</a></td>	
						</tr>						
 						<!--<tr>
							<td class="redact" style="width:30%">
								<div data-toggle="distpicker" class="data-peaker">
								  	<select class="form-control" id="province2" data-province="---- 选择省 ----"></select>
								  	<select class="form-control" id="city2" data-city="---- 选择市 ----"></select>
								  	<select class="form-control" id="district2" data-district="---- 选择区 ----"></select>
								</div>
							</td>
							<td><input name="sub[sub_start_heavy][]"></td>
							<td><input name="sub[sub_start_freight][]"></td>
							<td><input name="sub[sub_continue_heavy][]"></td>
							<td><input name="sub[sub_continue_freight][]"></td>
							<td><a href="javascript:;" class="removeTr">删除</a></td>
						</tr> -->
					</table>
				</label>
				<label for="">
					<div class="special">
						<div class="special-content">
							<div class="redact-adress" id="adress-group">

							</div>
						</div>
					</div>
				</label>
				<div class="sub-btn"><input type="button" class="abolish e-btn-submit btn-success" value="保存"/><input type="button" class="sumb" id="adress-btn1" value="取消" style="background:grey" /></div>
			</form>
		</div>
		<span class="close" id="dalogModalClose">×</span>
	</div>
</div>



<script src="/Public/js/distpicker.data.js" type="text/javascript" charset="utf-8"></script>
<script src="/Public/js/distpicker.js" type="text/javascript" charset="utf-8"></script>

<script>

	pager(<?php echo ($total); ?>);		//分页
	$('.removeTr').click(function(){
		$(this).parent().parent().remove();
	});
	$('.sumb').click(function(){
		$('#aleatMoudle').hide();
	})
	$('#add-new').click(function(){
		$('#aleatMoudle').show();
	})


$('#adress-btn2').click(function(){
	$('#adress-group').hide();
});
$('#dalogModalClose').click(function(){
	$('#aleatMoudle').hide();
});
var Oid;
$('.redactA').click(function(){
	Oid=$(this).parent().parent().index();

	$('#adress-group').fadeIn();
	$('.special').fadeIn();
})
$('#Darea').click(function(){
	var html='<tr class="e-select"><td class="redact" style="width:30%"><div data-toggle="distpicker" class="data-peaker"><select class="form-control" name="sub[province][]"></select><select class="form-control"  name="sub[city][]"></select><select class="form-control" name="sub[district][]"></select></div></td><td><input name="sub[sub_start_heavy][]"></td><td><input name="sub[sub_start_freight][]"></td><td><input name="sub[sub_continue_heavy][]"></td><td><input name="sub[sub_continue_freight][]"></td><td><a href="javascript:;" class="removeTr">删除</a></td></tr> ';
	$('.red-table>tbody').append(html)
	$(".data-peaker").distpicker();
})
$('#aleatMoudle').delegate('.removeTr', 'click', function(){
	$(this).parent().parent().remove();
});
$('#aleatMoudle').delegate('.redactA', 'click', function(){
	Oid=$(this).parent().parent().index();
	$('#adress-group').fadeIn();
	$('.special').fadeIn();
})

$('.e-not-free').click(function(){			//主信息隐藏或显示
	$('#e-must').show();
})
$('.e-free').click(function(){
	$('#e-must').hide();
})

$('.e-btn-submit').click(function(){
	if ($('input[name="name"]').val() == '') {
		alert('请填写模板名称');
		return;
	};	
	var j=0;
	if ($('input[name="is_free"]:checked').val()!= 1)  {				//包邮时候不验证物流主信息
		$('#e-must :input').each(function(){
			if ($(this).val() != '') {
				j++;
			};		
		})
		if (j !=4) {
			alert('运费信息填写不完整');
			return;
		};		
	}


	var j=1;
	$('.e-select').each(function(){
		var i=0;
		$(this).find('input').each(function(){
			if ($(this).val() != '') {
				i++;
			};
		})
		if (i != 4) {
			alert('特殊地区信息填写不完整');
			j=0;
			return;
		};
	})
	if (j) {$('#aleatMoudle form').submit();};
	
})
</script>


