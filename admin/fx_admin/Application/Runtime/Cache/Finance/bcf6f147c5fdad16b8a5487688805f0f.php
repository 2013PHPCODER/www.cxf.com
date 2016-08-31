<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
        <meta http-equiv="X-UA-Compatible" content="IE=9">
        <!-- <meta name="description" content="{if $page_description}{/if}"> -->
        <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
        <link rel="stylesheet" href="/Public/css/AdminLTE.css">
        <link rel="stylesheet" href="/Public/css/font-awesome.min.css">
        <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="/Public/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="/Public/css/skins/skin-red.css">
        <link rel="stylesheet" href="/Public/css/skins/skin-red-light.css">
        <link rel="stylesheet" href="/Public/css/bootstrap3-wysihtml5.min.css">
        
        <link rel="stylesheet" href="/Public/css/my.css">
        <link rel="stylesheet" href="/Public/css/layer.css" id="layui_layer_skinlayercss">
        <link rel="stylesheet" href="/Public/css/global.css">
        <link rel="shortcut icon" href="/Public/images/64x64.ico" type="image/x-icon" /> 
        <script src="//cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
        <script src="/Public/js/global.js" type="text/javascript" charset="utf-8"></script>
        <script src="/Public/js/kkpager.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="/Public/js/WdatePicker.js" type="text/javascript" charset="utf-8"></script>
        <script src="//cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        <script src="/Public/js/plus.js"></script>
        <style type="text/css">
            .sidebar-menu>li{display: none;}
            .navbar-static-top li{cursor: pointer;}
            .zhezhao{width: 100%;display: none; height: 100%;top: 0;left: 0; position: fixed;background: #000;opacity: .4;filter: alpha(opacity: 40);z-index: 5000;}
            .e-show-auth-main li {display: none}
        </style>
    </head>
    <div class="zhezhao"></div>
    <body class="skin-yellow-light sidebar-mini">
        <!--header start-->
        <header class="main-header">
            <a href="#" class="logo">
                <span class="logo-mini"><b>创想范</b></span>
                <span class="logo-lg"><b>创想范</b><small> 总管理后台</small></span>
            </a>
            <nav class="navbar navbar-static-top">
                <div class="navbar-nav top-bar">
                    <ul class="nav navbar-nav first-nav e-show-auth-main">
                        <li data-cate = "goods" data-show="0">
                            <a class="" href="<?php echo U('goods/goods/index');?>"><b>商品</b></a>
                        </li>
                        <li data-cate = "orders" data-show="0">
                            <a class="" href="<?php echo U('orders/orders/index');?>"><b>订单</b></a>
                        </li>
                        <li data-cate = "afterSales" data-show="0">
                            <a class="" href="<?php echo U('afterSales/index/index');?>"><b>售后</b></a>
                        </li>
                        <li data-cate = "storage" data-show="0">
                            <a class="" href="<?php echo U('storage/storage/slist');?>"><b>仓储</b></a>
                        </li>
                    <li data-cate = "finance" data-show="0">
                            <a class="" href="<?php echo U('finance/accountManage/index');?>"><b>财务</b></a>
                        </li>
                        <li data-cate = "userManage" data-show="0">
                            <a class="" href="<?php echo U('user/user/index');?>"><b>用户</b></a>
                        </li>
                        <li data-cate = "systemManage" data-show="0">
                            <a class="" href="<?php echo U('system/Power/logs');?>"><b>系统</b></a>
                        </li>
                        <li data-cate = "pageManage" data-show="0">
                            <a class="" href="<?php echo U('system/pageManage/index');?>"><b>页面</b></a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class=" user user-menu"  data-cate = "home">
                            <a href="<?php echo U('system/index/index');?>" class="dropdown-toggle" >
                                <span class="hidden-xs"><?php echo session('user.name');?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('system/login/logout');?>">
                                <span class="hidden-xs">退出登录</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--header end-->
        <!--wrapper start-->
        <div class="content-wrapper" style="min-height: 368px;">
            <aside class="main-sidebar">
                <section class="sidebar">
                    <ul class="sidebar-menu e-show-auth-sub">
                        <li data-cate="goods">
                            <a class="active" href="<?php echo U('goods/goods/index');?>"> <i class="fa fa-fw  fa-circle-o"></i> 商品列表</a>
                        </li>
                        <li data-cate="goods">
                            <a class="" href="<?php echo U('goods/goods/goodsRelease');?>"> <i class="fa fa-fw  fa-circle-o"></i> 发布管理</a>
                        </li>
                        <li data-cate="orders" >
                            <a class="" href="<?php echo U('orders/orders/index');?>"> <i class="fa fa-fw  fa-circle-o"></i> 订单列表</a>
                        </li>
                        <li data-cate="orders" >
                            <a class="" href="<?php echo U('orders/VirtualOrders/index');?>"> <i class="fa fa-fw  fa-circle-o"></i> 虚拟订单</a>
                        </li>
                        <li data-cate="afterSales" >
                            <a class="" href="<?php echo U('afterSales/index/index');?>"> <i class="fa fa-fw  fa-circle-o"></i> 售后列表</a>
                        </li>
                        <li data-cate="afterSales" >
                            <a class="" href="<?php echo U('afterSales/freight/index');?>"> <i class="fa fa-fw  fa-circle-o"></i> 退运费模板</a>
                        </li>
                        <li data-cate="storage" >
                            <a class="" href="<?php echo U('storage/storage/slist');?>"> <i class="fa fa-fw  fa-circle-o"></i> 仓库列表</a>
                        </li>
                        <li data-cate="storage" >
                            <a class="" href="<?php echo U('storage/storage/index');?>"> <i class="fa fa-fw  fa-circle-o"></i> 发货管理</a>
                        </li>
                        <li data-cate="storage" >
                            <a class="" href="<?php echo U('storage/storage/storageManger');?>"> <i class="fa fa-fw  fa-circle-o"></i> 库存管理</a>
                        </li>
                        <li data-cate="storage" >
                            <a class="" href="<?php echo U('storage/storage/logEdit');?>"> <i class="fa fa-fw  fa-circle-o"></i> 库存变动日志</a>
                        </li>
                        <li data-cate="financial" >
                            <a class="" href="<?php echo U('finance/accountManage/index');?>"> <i class="fa fa-fw  fa-circle-o"></i> 账户管理</a>
                        </li>
                        <li data-cate="financial" >
                            <a class="" href="<?php echo U('finance/collection/index');?>"> <i class="fa fa-fw  fa-circle-o"></i> 收款管理</a>
                        </li>
                        <li data-cate="financial" >
                            <a class="" href="<?php echo U('finance/payment/index');?>"> <i class="fa fa-fw  fa-circle-o"></i> 付款管理</a>
                        </li>
                        <li data-cate="userManage" >
                            <a class="" href="<?php echo U('user/user/index');?>"> <i class="fa fa-fw  fa-circle-o"></i> 分销商管理</a>
                        </li>
                        <li data-cate="userManage" >
                            <a class="" href="<?php echo U('user/user/supplierList');?>"> <i class="fa fa-fw  fa-circle-o"></i> 供应商管理</a>
                        </li>
                        <li data-cate="userManage" >
                            <a class="" href="<?php echo U('user/user/actingList');?>"> <i class="fa fa-fw  fa-circle-o"></i> 代理商管理</a>
                        </li>
                        <li data-cate="systemManage" >
                            <a class="" href="<?php echo U('system/Power/logs');?>"> <i class="fa fa-fw  fa-circle-o"></i> 操作记录</a>
                        </li>
                        <li data-cate="systemManage" >
                            <a class="" href="<?php echo U('system/Power/index');?>"> <i class="fa fa-fw  fa-circle-o"></i> 员工管理</a>
                        </li>
                        <li data-cate="systemManage" >
                            <a class="" href="<?php echo U('system/Setting/level');?>"> <i class="fa fa-fw  fa-circle-o"></i> 用户等级设置</a>
                        </li>
                        <li data-cate="systemManage" >
                            <a class="" href="<?php echo U('system/Setting/finance');?>"> <i class="fa fa-fw  fa-circle-o"></i> 财务设置</a>
                        </li>
                        <li data-cate="systemManage" >
                            <a class="" href="<?php echo U('system/Power/supplierLogs');?>"> <i class="fa fa-fw  fa-circle-o"></i> 供应商日志</a>
                        </li>                        
                        <li data-cate="pageManage" >
                            <a class="" href="<?php echo U('system/pageManage/index');?>"> <i class="fa fa-fw  fa-circle-o"></i> 文章列表</a>
                        </li>
                        <li data-cate="pageManage" >
                            <a class="" href="<?php echo U('system/message/index');?>"> <i class="fa fa-fw  fa-circle-o"></i> 站内信管理</a>
                        </li>
                        <li data-cate="pageManage" >
                            <a class="" href="<?php echo U('system/pageManage/sensitive');?>"> <i class="fa fa-fw  fa-circle-o"></i> 敏感词库</a>
                        </li>
                        <li data-cate="pageManage" >
                            <a class="" href="<?php echo U('system/pageManage/service');?>"> <i class="fa fa-fw  fa-circle-o"></i> 客服账号列表</a>
                        </li>
<!--                         <li data-cate="pageManage" >
                            <a class="" href="<?php echo U('system/message/index');?>"> <i class="fa fa-fw  fa-circle-o"></i> 商品页面属性</a>
                        </li> -->
                        <li data-cate="home" >
                            <a class="" href="<?php echo U('system/index/index');?>"> <i class="fa fa-fw  fa-circle-o"></i> 个人中心</a>
                        </li>
                        <li data-cate="home" >
                            <a class="" href="<?php echo U('system/index/showAuth');?>"> <i class="fa fa-fw  fa-circle-o"></i> 我的权限</a>
                        </li>                                                                 
                    </ul>
                </section>
            </aside>
            <section class="content">
                
    <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> 位置</li>
        <li>
            财务管理1</li>
        <li>收款账户</li>
    </ol> 
    <div class="row" >
        <form class="form-inline" method="get" action="<?php echo U('finance/accountManage/index');?>">
            <div class="form-group">
                <label for="exampleInputName2">用户类型: </label>
                <select class="form-control input-xs" name="user_type">
                    <!-- <option value="">—请选择—</option>-->
                    <?php foreach($user_type as $k=>$v){ ?>
                    <option value="<?php echo $k;?>" <?php if(I('get.user_type')==$k){echo 'selected';}?> ><?php echo $v;?></option>   
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputName2">支付方式:</label>
                <select class="form-control input-xs" name="receiver_platform">
                    <option value="">—请选择—</option>
                    <?php foreach($receiver_platform as $key=>$val){ ?>
                    <option value="<?php echo $key;?>"<?php if(I('get.receiver_platform')==$key){echo 'selected';}?>><?php echo $val;?></option>   
                    <?php }?>
                </select>
            </div>
            <div class="row" >
                <div class="form-group ">
                    <label for="exampleInputName2">用户账号:</label>
                    <input type="text" class="form-control input-xs" name="user_account" value="<?php echo I('get.user_account');?>" >
                </div>
                <div class="form-group ">
                    <label for="exampleInputName2">收款账户:</label>
                    <input type="text" class="form-control input-xs" name="receiver_account" value="<?php echo I('get.receiver_account');?>" >
                </div>	
                <div class="form-group">
                    <input type="submit"  class="btn btn-block btn-warning btn-xs" value="搜索">
                    <input type="hidden" name="is_close" value="1" id="is_close" >
                    <input type="hidden" name="is_cus" value="1" id="is_cus">
                </div>
            </div>
        </form>
    </div>
    <div class="box row">
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>用户账户</th>
                        <th>账户余额</th>
                        <th>收款账户类型</th>
                        <th>卡号</th>
                        <th>开户行地址</th>
                        <th>收款人</th>
                        <th>操作</th>
                    </tr>
                    <?php foreach($list_data['list'] as $value){ ?>
                    <tr>
                        <th><?php echo $value['username']; ?></th>
                        <th><?php echo !$value['balance']?'--':$value['balance'];?></th>
                        <th><?php echo $receiver_platform[$value['receiver_account_type']] ;?></th>
                        <th><?php echo $value['receiver_account'];?></th>
                        <th><?php echo $value['open_bank_address'];?></th>
                        <th><?php echo $value['receiver_account_name'];?></th>
                        <th><a href="<?php echo U('finance/accountManage/detail',array('user_id'=>$value['id'],'user_type'=>$ckeck_user_type));?>">查看</a></th>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="right">
        <div class="pagination">
            <?php echo ($list_data["page"]); ?>
        </div>
    </div>



            </section>
        </div>    
    </body>



    <script>
        showMenu();
        showAuth(<?php echo json_encode(session('auth_show'));?>);
        var target = "<?php echo U(); ?>";
        target=target.toUpperCase();
        if (target.indexOf('SYSTEM/INDEX')>=0) {
            $('.user-menu').addClass('active');
        };



        function showAuth(auth){
            if (auth.all==='all') {                 //超级用户显示所有
                $('.e-show-auth-main li').show();
                return;
            };
            var target = "<?php echo U(); ?>";
            target=target.toUpperCase();
            var current_cate;

            $('.e-show-auth-main a').each(function(){
                var url=$(this).attr('href').toUpperCase();
                if (target.indexOf(url)>=0) {
                    current_cate=$(this).parent('li').data('cate');
                };
                for (var i = 0; i < auth.length; i++) {
                    if (url.indexOf(auth[i])>=0) {
                        $(this).parent('li').show();
                        $(this).parent('li').data('show', 1); 
                    };
                };
            })

            $('.e-show-auth-sub a').each(function(){
                var url=$(this).attr('href').toUpperCase();
                for (var i = 0; i < auth.length; i++) {
                    if (url.indexOf(auth[i])>=0) {                                  //拥有权限
                        var cate=$(this).parent('li').data('cate');                 //获得分类
                        $(this).parent('li').data('show', 1);                       //标记                            
                        var main=$('.e-show-auth-main [data-cate="'+cate+'"]');         
                        if (main.length>0 && main.data('show') !=1) {           //子菜单对应主菜单，如果没有显示
                           main.find('a').attr('href',$(this).attr('href'));
                           main.show();
                        };              
                    };
                if (target.indexOf(url)>=0) {
                    current_cate=$(this).parent('li').data('cate');
                };                    
                };
            })
            var sub=$('.e-show-auth-sub [data-cate="'+current_cate+'"]'); 
            sub.hide();
            sub.each(function(){
                if ($(this).data('show')) {
                    $(this).show();
                }
            })
        }

        function showMenu() {
            var target = "<?php echo U(); ?>";
            target = target.toUpperCase();

            var selected = _show(target);                     //二级菜单选中标记

            if (!selected) {                //三级菜单选择    
                var refUrl = $.cookie('__refUrl');
                var tmp = refUrl.split('/');
                var _target = tmp[1] + '/' + tmp[2];
                if (target.indexOf(_target) > 0) {
                    _show(refUrl);
                }
                ;
            }

            function _show(target) {
                var r = 0;                                //选中标记
                $('.e-show-auth-sub a').removeClass('active');     //顶级菜单显示
                $('.e-show-auth-sub a').each(function () {
                    var tmp = $(this).attr('href');
                    tmp = tmp.toUpperCase();
                    if (tmp == target) {
                        $(this).addClass('active');                 //二级菜单显示
                        var cate = $(this).parent().data('cate');
                        $('.e-show-auth-sub').find("[data-cate='" + cate + "']").show();
                        $('.e-show-auth-main').find('[data-cate="' + cate + '"]').addClass('active');      //顶级菜单显示                            
                        r = 1;
                        return;
                    }
                });
                if (r) {                                                    //二级菜单选中，记录refurl  
                    $.cookie('__refUrl', target, {expires: 30, path: '/'});
                }
                ;
                return r;
            }
        }


    </script>


    <!--wrapper end-->
    <script src="/Public/js/bootstrap.min.js"></script>
    <script src="/Public/js/app.min.js"></script>
    <script type="text/javascript" src="/Public/js/moment.js"></script>
    <script src="/Public/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/Public/js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
    <script type="text/javascript" src="/Public/js/custom.js"></script>
    <script type="text/javascript" src="/Public/js/layer.js"></script>    
</html>