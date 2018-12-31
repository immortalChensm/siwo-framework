<?php
/**
 * Created by PhpStorm.
 * User: 1655664358@qq.com
 * Date: 2018/11/19
 * Time: 0:44
 */
define('SIWO_PATH',realpath(getcwd()));
$autoLoadFile = SIWO_PATH.'vendor/autoload.php';
if (file_exists($autoLoadFile)){
    require $autoLoadFile;
}else{
    echo $autoLoadFile."\n";
    die("require composer autoload fail\n");
}
(new \Siwo\Foundation\Application())->run();