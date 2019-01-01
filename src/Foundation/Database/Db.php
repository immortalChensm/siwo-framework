<?php
/**
 * Created by PhpStorm.
 * User: 1655664358@qq.com
 * Date: 2018/11/22
 * Time: 14:58
 */
namespace Siwo\Foundation\Database;
class Db
{
    public static $pool;
    public static function getInstance()
    {
        return MysqlPool::getInstance()->get();
    }

    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        $query = MysqlPool::getInstance()->get();
        if (method_exists($query,$name)){
            return $query->{$name}(...$arguments);
        }
    }

    public static function freeObj($db)
    {
        return MysqlPool::getInstance()->put($db);
    }
}