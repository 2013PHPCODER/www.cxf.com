<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		
		<meta name="description" content="{if $page_description}{/if}" />
		<link rel="stylesheet" href="/Public/static/home/css/bootstrap.min.css">
  		<link rel="stylesheet" href="/Public/static/home/css/AdminLTE.css">
	</head>
	<body class="hold-transition skin-yellow-light sidebar-mini">
<script src="/Public/static/home/js/plugins/jQuery-2.2.0.min.js"></script>
<script type="text/javascript" src="/Public/static/layer/layer.js"></script>
<script type="text/javascript">


 	var openTaoBaoOut = function (){
		layer.open({
			type: 2,
			area: ['700px', '530px'],
			fix: false, //不固定
			maxmin: true,
			content: "https://oauth.taobao.com/logoff?client_id=<?php echo C('taobaoAppKey');?>&view=web"
		});
 	}

	layer.confirm('<?php echo ($data["info"]); ?>',{btn:['确定','重新授权']},
	 	function(index){
	 		layer.close(index);
	 		window.opener = null;
			window.open("", "_self");
			window.close();
		},function(index){

			//openTaoBaoOut();
			var str = "<script src='https://oauth.taobao.com/logoff?client_id=<?php echo C('taobaoAppKey');?>&view=web'><\/script>";
  	 		$("body").append(str);
  			setTimeout(function(){
  				location.href = "<?php echo U('TbApi/getCode');?>";
  			},500);
			
		}
	);

	
</script>

	</body>
</html>