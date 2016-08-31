<?php

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/**
 * ThinkPHP惯例配置文件
 * 该文件请不要修改，如果要覆盖惯例配置的值，可在应用配置文件中设定和惯例不符的配置项
 * 配置名称大小写任意，系统会统一转换成小写
 * 所有配置参数都可以在生效前动态改变
 */
defined('THINK_PATH') or exit();
return array(
    'URL_MODEL'=>2,
    'DEFAULT_MODULE'=>'Home',
    'DEFAULT_CONTROLLER'=>'Index',
    'DEFAULT_ACTION'=>'index',
    'URL_CASE_INSENSITIVE'=>false,//url地址是否验证大小写
    /* 数据库设置 */
    'DB_TYPE'=>'mysql',// 数据库类型
    'DB_HOST'=>'rm-bp1s5q44r0x2lw714o.mysql.rds.aliyuncs.com',// 服务器地址
    'DB_NAME'=>'fx_829',// 数据库名
    'DB_USER'=>'cxf_mrchen',// 用户名
    'DB_PWD'=>'Abc123456',// 密码
    'DB_PORT'=>'3306',// 端口
    'DB_PREFIX'=>'',// 数据库表前缀
    'DB_PARAMS'=>array(),// 数据库连接参数    
    'DB_DEBUG'=>TRUE,// 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'=>false,// 启用字段缓存
    'DB_CHARSET'=>'utf8',// 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'=>0,// 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'=>false,// 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'=>1,// 读写分离后 主服务器数量
    'DB_SLAVE_NO'=>'',// 指定从服务器序号
    'URL_CASE_INSENSITIVE'=>false,// ＵＲＬ大小写
    'TMPL_PARSE_STRING'=>array(
        '__STATIC__'=>SOURCE_DIR . '/static/',
    ),
    //模块
    'MULTI_MODULE'=>true,// 是否允许多模块 如果为false 则必须设置 DEFAULT_MODULE
    'MODULE_DENY_LIST'=>array('Common','Runtime'),// 禁止访问的模块列表
    'MODULE_ALLOW_LIST'=>array('Home','Goods','Orders','AfterSales','Storage','System','User','Finance'),
    'DEFAULT_MODULE'=>'System',
//    'LOAD_EXT_CONFIG'=>'',
//数据过滤
    'DEFAULT_FILTER'=>'strip_tags,stripslashes',
    //视图渲染设置
    'TMPL_ACTION_ERROR'=>'../../Common/View/layout/dispatch_jump',
    'TMPL_ACTION_SUCCESS'=>'../../Common/View/layout/dispatch_jump',
    'LAYOUT_ON'=>true,
    'LAYOUT_NAME'=>'../../Common/View/layout/layout2',
    'TOKEN_ON'=>true,// 是否开启令牌验证 默认关闭
    'TOKEN_NAME'=>'__hash__',// 令牌验证的表单隐藏字段名称，默认为__hash__
    'TOKEN_TYPE'=>'md5',//令牌哈希验证规则 默认为MD5
    'TOKEN_RESET'=>true,//令牌验证出错后是否重置令牌 默认为true
    //自定义
    'IMAGE_CHECK_KEY'=>'rew85chs',//图片验证KEY
    'UPLOAD_URL'=>'/Public/upload/',//上传目录的访问地址
    'UPLOAD_PATH'=>$_SERVER['DOCUMENT_ROOT'] . '/Public/upload',//上传的写入目
//    'cas_ip'=>'114.55.87.173',//CAS服务器ＩＰ
//    'cas_port'=>8888,//CAS服务器端口
//    'cas_logOut_service'=>'http://8097.xlufei.com',//ＣＡＳ及淘宝ＡＰＩ返回地址ＨＯＳＴ 
//    'cus_api_url'=>'http://121.41.78.192:23959/api/sup/interface.php',//售后接品地址
    'taobaoAppKey'=>'23392048',//淘宝取电子面单应用AppKey
    'taobaosecretKey'=>'98979719bba284ba7a4bed21fac18f92',//淘宝取电子面单应用secretKey
    'show_page_trace'=>1,
    
    'LANG_SWITCH_ON' => true,   // 开启语言包功能
    'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
    'LANG_LIST'        => 'zh-cn', // 允许切换的语言列表 用逗号分隔
    'VAR_LANGUAGE'     => 'l', // 默认语言切换变量
    
    'FINANCE_PWD_STR'  => 'cxf', //财务管理模块对支付密码前缀统一加上字符串再MD5



    'MODULE_NAME'=>[                        //模块名称，用于选择模块进行查询筛选
        'aftersales'=>'售后模块',
        'finance'=>'财务模块',
        'goods'=>'商品模块',
        'orders'=>'订单模块',
        'storage'=>'仓库模块',
        'system'=>'系统模块',
    ],    

    'IMG'=>[
        'url'=>[                                           //访问地址
            'goods'=>'http://img.mycxf.com/goods/',
            'ad'=>'http://img.mycxf.com/ad/',
            'other'=>'http://img.mycxf.com/other/',
        ],
        'thumb'=>[
            '100'=>'!thumb100',
            '200'=>'!thumb200',
            '300'=>'!thumb300',
        ],
        'upload'=>[
            'domin' => 'v0.api.upyun.com',
            'token' => 'LAbJCTJbDjiqQLQFqsHqXPJR/fE=',
            'bucket' => 'cxf-img-new',    
            'valid_time'=>1200,                     //凭证有效期       
            'path'=>[
                'goods'=>'/goods/',
                'ad'=>'/ad/',
                'other'=>'/other/',
            ],
        ]
    ],
);

