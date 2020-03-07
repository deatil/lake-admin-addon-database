<?php
return [
    [
        "route" => "admin/database/index",
        "type" => 2,
        "is_menu" => 1,
        "title" => "数据库备份",
        "icon" => "icon-bangzhushouce",
        "tip" => "",
        "listorder" => 100,
        "child" => [
            [
                "route" => "admin/database/index",
                "type" => 2,
                "is_menu" => 1,
                "title" => "数据库备份",
                "icon" => "icon-bangzhushouce",
                "child" => [
                    [
                        "route" => "admin/database/restore",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "备份还原",
                    ],
                    [
                        "route" => "admin/database/del",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "删除备份",
                    ],
                    [
                        "route" => "admin/database/repair",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "修复表",
                    ],
                    [
                        "route" => "admin/database/optimize",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "优化表",
                    ],
                    [
                        "route" => "admin/database/import",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "还原表",
                    ],
                    [
                        "route" => "admin/database/export",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "备份数据库",
                    ],
                    [
                        "route" => "admin/database/download",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "备份数据库下载",
                    ],
                ],
            ],

        ],
    ],
];
