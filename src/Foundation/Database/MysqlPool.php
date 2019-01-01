<?php
/**
 * Created by PhpStorm.
 * User: 1655664358@qq.com
 * Date: 2019/1/1
 * Time: 22:02
 */
namespace Siwo\Foundation\Database;
use Siwo\Foundation\Traits\Singleton;

class MysqlPool
{
    protected static $instance;

    use Singleton;
    /**
     * @var \Swoole\Coroutine\Channel
     */
    protected $pool;

    /**
     * RedisPool constructor.
     * @param int $size 连接池的尺寸
     */
    function __construct($size = 10)
    {
        $this->pool = new Swoole\Coroutine\Channel($size);
        for ($i = 0; $i < $size; $i++)
        {
            $db = new Query();
            $this->put($db);

        }
    }

    function put($db)
    {
        $this->pool->push($db);
    }

    function get()
    {
        return $this->pool->pop();
    }
}