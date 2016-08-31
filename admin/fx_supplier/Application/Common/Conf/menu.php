<?php

/**
 * 控制器对应下级菜单
 */
return array(
//控制器对应菜单
    'menu'=>array(
        'index'=>array(
            'title'=>'后台首页',
            'action'=>array(
                'index'=>'欢迎',
            ),
        ),
        'goods'=>array(
            'title'=>'商品管理',
            'action'=>array(
                'index'=>'商品管理',
                'inport'=>'商品导入',
            ),
        ),
        'order'=>array(
            'title'=>'订单',
            'action'=>array(
                'index'=>'商品管理',
                'inport'=>'商品导入',
            ),
        ),
        'storage'=>array(
            'title'=>'仓储',
            'action'=>array(
                ''=>'物流模板',
                'storageManger'=>'仓库设置',
                'index'=>'发货列表',
                ''=>'售后收货',
                ''=>'库存列表',
                'logEdit'=>'库存修改日志',
            ),
        ),
        'finance'=>array(
            'title'=>'财务',
            'action'=>array(
                'index'=>'商品管理',
                'inport'=>'商品导入',
            ),
        ),
        'system'=>array(
            'title'=>'系统设置',
            'action'=>array(
                'index'=>'商品管理',
                'inport'=>'商品导入',
            ),
        ),
    ),
);
