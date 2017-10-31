<?php
return array(
    //是否开发模式,这个很重要，如果开启debug方式不发短信了
    'debug' => 1,
    'queue_apply_num' => 100,//队列类task默认的处理该数量的队列数量后退出
    'queue_apply_spacing_time' => 100,//队列两条数据处理中间间隔,单位毫秒
    'loop_apply_num' => 100,//循环类task默认循环该数量后退出
    'fail_max_queue_apply_num' => 3,//队列数据处理失败后最大处理次数
    'fail_wait_time' => 3,//队列数据处理失败后等待该秒数后重试
    //原xxx项目路径
    //'thinkphp_path' => '/work/wwwroot/youyuhaha/cornerstone/yrzif/bugfix',
    //MYSQL数据库配置
    'mysql' => array(
        'prefix' => 'fi_',
        "host" => "localhost",
        "username" => "root",
        "password" => "root2008~",
        "dbname" => "trjp2p",
        "port" => 3306,
        "charset" => 'utf8',
    ),
);

