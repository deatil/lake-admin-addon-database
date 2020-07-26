<?php

return [
    // 模块ID[必填]
    'module' => 'database',
    // 模块名称[必填]
    'name' => '数据库备份',
    // 模块简介[选填]
    'introduce' => '简单的数据库备份',
    // 模块作者[选填]
    'author' => 'deatil',
    // 作者地址[选填]
    'authorsite' => 'http://github.com/deatil',
    // 作者邮箱[选填]
    'authoremail' => 'deatil@github.com',
    // 版本号，请不要带除数字外的其他字符[必填]
    'version' => '2.0.6',
    // 适配最低lake版本[必填]
    'adaptation' => '2.0.2',
    // 签名[必填]
    'sign' => md5('lake-addon-database'),
    
    // 模块地址，插件自定义包时填写
    'path' => __DIR__,
    
    // 依赖模块
    'need_module' => [],
    
    // 设置
    'setting' => [
        'path' => [ //配置在表单中的键名 ,这个会是config[title]
            'title' => '数据库备份路径', //表单的文字
            'type' => 'text', //表单的类型：text、textarea、checkbox、radio、select等
            'value' => '/data/', //表单的默认值
            'style' => "width:200px;", //表单样式
            'tips' => '路径必须以 / 结尾',
        ],
        'part' => [
            'title' => '数据库备份卷大小',
            'type' => 'text',
            'value' => '20971520',
            'style' => "width:200px;",
            'tips' => '该值用于限制压缩后的分卷最大长度。单位：B；建议设置20M',
        ],
        'compress' => [
            'title' => '是否启用压缩',
            'type' => 'select',
            'options' => [
                '1' => '启用压缩',
                '0' => '不启用',
            ],
            'value' => '1',
            'tips' => '压缩备份文件需要PHP环境支持gzopen,gzwrite函数',
        ],
        'level' => [
            'title' => '压缩级别',
            'type' => 'select',
            'options' => [
                '1' => '普通',
                '4' => '一般',
                '9' => '最高',
            ],
            'value' => '9',
            'tips' => '数据库备份文件的压缩级别，该配置在开启压缩时生效',
        ],
    ],
    
    // 菜单
    'menus' => include __DIR__ . '/menu.php',
    
    // 嵌入点
    'hooks' => [],
    
    // 数据表，请加表前缀pre__[有数据库表时必填]
    'tables' => [],
    
    // 演示数据文件。比如：demo.sql，文件位于install根目录
    'demo' => '',
];
