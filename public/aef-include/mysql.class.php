<?php
/**
 * CNAEF
 *
 * MySQL数据操方法封装。
 *
 * @version 1.0.1
 *
 * @todo
 *          将显示错误统一返回为JSON
 * @email   soulteary@qq.com
 * @website http://soulteary.com
 */

if (!defined('FILE_PREFIX')) include "../error-forbidden.php";

class MySQL extends Safe
{
    private $connect;
    private $args = [];

    /**
     * 查询次数
     * @var int
     */
    private $queryCount = 0;

    /**
     * 内部数据结果
     * @var
     */
    private $result;

    function __construct()
    {
        $this->args = core::init_args(func_get_args());

        if (!function_exists('mysql_connect')) {
            $error = "服务器PHP不支持MySQL数据库。";
            if ($this->args['DEBUG']) {
                core::message("<p>$error</p>");
            } else {
                core::json($error);
            }
        }

        if ($this->args['MODE'] == "WRITE") {
            $SELECT_DB = DB_HOST_WRITE;
        } else {
            $SELECT_DB = DB_HOST_READ;
        }

        if (!$this->connect = mysql_connect($SELECT_DB, DB_USER, DB_PASS)) {
            $error = "连接数据库失败，可能是数据库用户名或密码错误。";
            if ($this->args['DEBUG']) {
                core::message("<p>$error</p>");
            } else {
                core::json($error);
            }
        }

        $connect = mysql_select_db(DB_NAME, $this->connect);
        if (!$connect) {
            $error = "未找到指定数据库。";
            if ($this->args['DEBUG']) {
                core::message("<p>$error</p>");
            } else {
                core::json($error);
            }
        }
		$this->query("SET NAMES utf8");
    }

    /**
     * 关闭数据库连接
     * @return bool
     */
    public function close()
    {
        return mysql_close($this->connect);
    }

    /**
     * 发送查询语句
     *
     * @param $sql
     *
     * @return resource
     */
    public function query($sql)
    {
        $this->result = mysql_query($sql, $this->connect);
        $this->queryCount++;

        if (!$this->result) {
            $error['title'] = "SQL语句执行错误";
            if ($this->args['DEBUG']) {
                $message[] = $sql;
                $message[] = $this->geterror();
                $error['message'] = $message;
                core::message($error);
            } else {
                $error['message'] = $sql;
                $error['error'] = $this->geterror();
                core::json($error);
            }
        } else {
            return $this->result;
        }
    }
	
	public function insert($table, $data, $escape = true)
	{
		$safeData = array();
		foreach ($data as $key => $value) {
			$safeData['`' . $key . '`'] = $escape ? $this->escapeSQL($value) : $value;
		}
		$sql  = 'INSERT INTO `'.$table.'` (';
		$sql .= implode(",", array_keys($safeData));
		$sql .= ') VALUES (\'';
		$sql .= implode("','", $safeData);
		$sql .= '\')';
		return $this->query($sql);
	}

    /**
     * 转义SQL
     *
     * @param $str
     *
     * @return string
     */
    public function escapeSQL($str)
    {
        return mysql_real_escape_string($str, $this->connect);
    }

    public function fetch_array($query, $type = MYSQL_ASSOC)
    {
        return mysql_fetch_array($query, $type);
    }

    public function once_fetch_array($sql)
    {
        $this->result = $this->query($sql);

        return $this->fetch_array($this->result);
    }

    public function fetch_row($query)
    {
        return mysql_fetch_row($query);
    }

    function num_rows($query)
    {
        return mysql_num_rows($query);
    }

    function num_fields($query)
    {
        return mysql_num_fields($query);
    }

    function insert_id()
    {
        return mysql_insert_id($this->connect);
    }

    function geterror()
    {
        return mysql_error();
    }

    function affected_rows()
    {
        return mysql_affected_rows();
    }

    function getMysqlVersion()
    {
        return mysql_get_server_info();
    }

    function getQueryCount()
    {
        return $this->queryCount;
    }
}
