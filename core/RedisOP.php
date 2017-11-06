<?php

/**
 * Description of RedisOP
 * 
 * 
 * @author clarkzhao
 * @date 2015-06-12 11:32:20
 * @copyright joyme.com
 */

namespace Piwik;

use Piwik\Log;
use Redis as Redis;
use RedisException as RedisException;
use Exception as Exception;


class RedisOP {

    private $e = null;
    private $host;
    private $port;
    private $timeout;
    private $conn;

    public function __construct($host, $port = 6379, $timeout = 0) {
        $this->host = $host;
        $this->port = $port;
        $this->timeout = $timeout;
        $this->conn = new Redis();
    }

    public function __destruct() {
        if ($this->conn) {
            if ($this->conn->isConnected()) {
                $this->conn->close();
            }
        }
    }

    private function connect() {
        if ($this->conn) {
            if ($this->conn->isConnected() == FALSE) {
                $this->conn->pconnect($this->host, $this->port);
            }
        }
    }

    /**
     * 设置值  构建一个字符串
     * @param string $key KEY名称
     * @param mixed $value  设置值
     * @param int $timeOut 时间  0表示无过期时间
     */
    public function set($key, $value, $timeOut = 0) {
        $value = serialize($value);
        $this->connect();
        try {
            $ret = $this->conn->set($key, $value);
            if ($timeOut > 0)
                $redis->expire($key, $timeOut);
        } catch (RedisException $exc) {
            return $this->setErrMessage(new Exception($exc->getMessage()));
        }
        return $ret;
    }

    public function del($key) {
        $this->connect();
        try {
            $result = $this->conn->delete($key);
        } catch (RedisException $exc) {
            $result = $this->setErrMessage(new Exception($exc->getMessage()));
        }
        return $result;
    }

    /**
     * 通过key获取数据
     * @param string $key KEY名称
     */
    public function get($key) {
        $this->connect();
        try {
            $result = $this->conn->get($key);
            if (!empty($result)) {
                $result = unserialize($result);
            }
        } catch (RedisException $exc) {
//            echo $exc->getMessage()."\n";
            return $this->setErrMessage(new Exception($exc->getMessage()));
        }
        return $result;
    }

    /**
     * 构建一个列表(先进后去，类似栈)
     * @param sting $table KEY名称
     * @param mixed $value 值
     */
    public function lpush($table, $value) {
        $this->connect();
        try {
            $ret = $this->conn->lPush($table, serialize($value));
        } catch (RedisException $exc) {
            return $this->setErrMessage(new Exception($exc->getMessage()));
        }
        return $ret;
    }

    /**
     * 
     * @param sting $table KEY名称
     */
    public function blPop($table, $timeOut = 0) {
        $this->connect();
        try {
            $ret = $this->conn->blPop($table, $timeOut);
            if (is_array($ret))
                $ret = unserialize($ret[1]);
        } catch (RedisException $exc) {
            if ($exc->getMessage() == 'read error on connection') {
                $ret = false;
            } else {
                return $this->setErrMessage(new Exception($exc->getMessage()));
            }
        }
        return $ret;
    }

    public function lPop($table) {
        $this->connect();
        try {
            $ret = $this->conn->lPop($table);
            if (is_string($ret))
                $ret = unserialize($ret);
        } catch (RedisException $exc) {
            return $this->setErrMessage(new Exception($exc->getMessage()));
        }
        return $ret;
    }

    public function setErrMessage($exc) {
        $this->e = $exc;
        Log::error(get_called_class() . "|" . $exc->getMessage());
        return NULL;
    }

    public function getErrMessage() {
        if ($this->e != null) {
            return $this->e->getMessage();
        }
    }

}
