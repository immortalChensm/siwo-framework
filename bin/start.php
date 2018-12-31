<?php
/**
 * Created by PhpStorm.
 * User: 1655664358@qq.com
 * Date: 2018/11/19
 * Time: 0:44
 */
define('SIWO_PATH',dirname(__FILE__)."/");
require SIWO_PATH.'autoload.php';
(new \Siwo\Foundation\Application())->run();