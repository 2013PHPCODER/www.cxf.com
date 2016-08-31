<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
    <li><i class="fa fa-dashboard"></i> 系统位置</li>
    <li>操作记录</li>
</ol> 				
<div class="box-body">
    <div class="row" >
        <form class="form-inline" method="get" action="<?php echo U('system/index/index');?>" id="form_search" onsubmit="return X.toSerchVaild(this)">
            <div class="form-group">
                <select class="form-control input-xs" name="module">
                    <option value="">选择操作模块</option>
                    <?php if(is_array($modules)): foreach($modules as $k=>$v): ?><option value="<?php echo ($k); ?>"><?php echo ($v); ?></option><?php endforeach; endif; ?>    
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputName2">操作时间:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            </div>
            <div class="form-group">
                <label>开始时间:</label>
                <input type="text" class="form-control input-xs" onClick="WdatePicker()" value="<?php echo I('get.time1');?>" name="time1">
            </div>
            <div class="form-group">
                <label>结束时间:</label>
                <input type="text" class="form-control input-xs" onClick="WdatePicker()" value="<?php echo I('get.time2');?>" name="time2">
            </div>	
            <div class="form-group">
                <input type="submit"  class="btn btn-block btn-warning btn-xs" value="筛选">
            </div>
        </form>

    </div>
    <div class="row table-responsive no-padding">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <th>操作模块</th>
                    <th>操作内容</th>
                    <th>操作时间</th>
                </tr>	
            <?php if(is_array($list)): foreach($list as $key=>$q): ?><tr>
                    <th><?php echo ($q["module"]); ?></th>
                    <th><?php echo ($q["detail"]); ?></th>
                    <th><?php echo ($q["add_time"]); ?></th>
                </tr><?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>	
    <div class="box-footer">
        <div id="kkpager"></div>
    </div>
</div>


<div class="modal fade" id="e-modify" data-backdrop="static" data-keyboard="false"><div class="modal-dialog"><div class="modal-content row">
            <div class="modal-header col-sm-12">
                <h4 class="center">修改密码</h3>
            </div>
            <form class="modal-body">
                <p><span>原密码：</span><input type="text" placeholder="请输入原密码" name="old"></p>
                <p><span>新密码：</span><input type="password" placeholder="请输入新密码" name="pw1"></p>
                <p><span>确认新密码：</span><input type="password" placeholder="请再次输入新密码" name="pw2"></p>
            </form> 
            <div class="modal-footer col-sm-12">
                <div class="front">
                    <button class="btn btn-success btn-confirm ">保存</button>
                    <button class="btn" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div></div></div>  	



<script src="/Public/js/calendar.js"></script> 
<style>
    .s-date ul, .s-date ol, .s-date li {
        list-style: none;
        padding: 0;
        margin: 0;
    }	
    .modal-body p{text-align: center}
    .modal-body p span{margin-right: 20px}
</style>
<script>
            pager(<?php echo ($total); ?>);

            $('#date1').calendar({
                trigger: '.e-date1',
                zIndex: 999,
                format: 'yyyy-mm-dd',
            });
            $('#date2').calendar({
                trigger: '.e-date2',
                zIndex: 999,
                format: 'yyyy-mm-dd',
            });

            var q = $('#e-modify');

            $('.btn-confirm').click(function () {

                $.ajax({
                    type: 'post', url: '<?php echo U("system/index/edit");?>', data: q.find('form').serialize(), async: false,
                    success: function (e) {
                        switch (e.status) {
                            case 'error':
                                X.notice(e.msg);
                                break;
                            case 'failed':
                                X.notice(e.msg);
                                break;
                            case 'success':
                                X.notice(e.msg);
                                window.location.reload();
                                break;
                            default:
                                X.notice('未知系统错误');
                                break;
                        }
                    }
                })
            })
</script>