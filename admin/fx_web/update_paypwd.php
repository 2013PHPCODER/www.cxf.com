<!DOCTYPE html>
<html>
    <head>
    <head>
        <meta charset="UTF-8">
        <!-- 设置360浏览器渲染模式,webkit 为极速内核，ie-comp 为 IE 兼容内核，ie-stand 为 IE 标准内核。 -->
        <meta name="renderer" content="webkit">
        <meta name="google" value="notranslate">
        <!-- 禁止Chrome 浏览器中自动提示翻译 -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <!-- 禁止百度转码 -->
        <meta name="Description" content="" />
        <meta name="Keywords" content="" />
        <meta name="author" content="">
        <meta name="Copyright" content="" />
        <title>创想范分销平台--修改支付密码</title>
        <link rel="stylesheet" type="text/css" href="css/zengli.css" />
        <link rel="stylesheet" type="text/css" href="css/common.css"/>
        <script src="//cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
        <script src="//cdn.bootcss.com/knockout/3.3.0/knockout-min.js"></script>
        <script src="js/pseudo.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/public.js"></script>
        <script src="js/plus.js"></script> 
    </head>


    <body>
        <?php include_once 'base/vip_top.php'; ?>
        <div class="capital">
            <?php include_once 'base/vip_top_1.php'; ?>

            <div class="capital-box clearfix">
                <?php include_once 'base/vip_left.php'; ?>
                <div class="capital-body">
                    <div class="capital-cont">
                        <div class="cont-box">
                            <div class="cont-box-title">
                                <h2 class="change">修改支付密码</h2>
                            </div>
                            <div class="cont-box-body change-pad">
                                <div class="change-cont" style="display: none;">
                                    <div class="change-box user-center">
                                        <label for=""><span>输入新密码：</span><input type="password" name="pwd"  id="pwd"/></label>
                                        <label for=""><span>确认新密码：</span><input type="password" name="repwd" id="repwd"/></label>
                                        <label for=""><input type="button" class="btn pre-btn" id="up-prev" value="上一步" /><input type="button" class="btn next-btn" id="up-pay-sub" value="确认" /></label>
                                    </div>
                                </div>
                                <div class="PopDiv pay-pop" id="pay-pop" style="display: block;">
                                    <div class="PopBody">
                                        <p class="p-username">用户名:<span data-bind = "text:user_account">fenxiaoshang@qq.com</span></p>
                                        <div class="mark-secVerify">
                                            <p class="m-mobile"><input type="radio" name="m_secVer" data-id='mobile'  data-bind = "attr:{value:mobile}">手机验证<span data-bind = "text:mobile"></span></p>
                                        </div>	    
                                        <div class="sec-code">填写验证码：<input type="text" class="s-code"><span class="s-send"  id="old_up">发送验证码</span></div>
                                    </div>
                                    <div class="PopFooter">
                                        <button id="next">下一步</button>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <?php include_once 'base/vip_right.php'; ?>
            </div>
        </div>
        <?php include_once 'base/vip_footer.php'; ?>

        <!--弹窗-->
        <script type="text/javascript">
            X.bindModel(requestUrl.userinfo, 1, {'user_id': getCookieValue('user_id')}, 'body.list', ['pay-pop'], function () {
            })
            $('#old_up').click(function () {
                X.Post(requestUrl.paye_code, 1, {'to': getCookieValue('mobile'), 'type': 'mobile', 'target': 'change_pwd'}, function (e) {
                    if(e.header.stats==0){
                		X.notice(e.body.list,3)
    					var n = 59;	
						var timer=setInterval(function(){
							if(n>=0){
								$('#old_up').html(n+'s后再次发送');
								n--;
							}else{			
								clearInterval(timer);
							}
					   },1000);	
    				}else{
                    	X.notice(e.header.msg,3)
                    }
                })
            })
            $('#next').click(function () {
                X.Post(requestUrl.pay_check, 1, {'verify': $('.s-code').val(), 'target': 'change_pwd', 'field': 'mobile', 'field_data': getCookieValue('mobile')}, function (e) {
                    if (e.header.stats == 0) {
                        $('#pay-pop').fadeOut();
                        $('.change-cont').fadeIn();
                    } else {
                        X.notice(e.header.msg, 3)
                    }

                })
            })
            $('#up-prev').click(function () {
               window.history.back(-1);
            })
            //新手机号码验证
            $('#up-pay-sub').click(function () {
                X.Post(requestUrl.change_pwd, 1, {'user_id': getCookieValue('user_id'), 'type': 2, 'pwd': $('#pwd').val(), 'repwd': $('#repwd').val()}, function (e) {
                    if (e.header.stats == 0) {
                        X.notice(e.header.msg, 3)
                        $('.change-cont').fadeOut();
                        window.location.href = 'login.php';
                    }else{
                    	X.notice(e.header.msg,3)
                    }
                })
            })
        </script>

    </body>
</html>