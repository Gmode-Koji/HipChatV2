<?php
set_time_limit(0);                  // 実行時間を無限に設定
error_reporting(E_ALL);             // エラーは全て出力
ini_set( 'display_errors', 1 );     // エラーを表示する )
spl_autoload_register(function ($class) {

    $file = 'src/' . str_replace("\\", "/" , $class) . '.php';

    if (!is_file($file)) {
        return;
    }

    require_once($file);
});
