<?php
/**
 * CNAEF
 * 程序安全检查函数库。
 *
 * @version 1.0.1
 *
 *
 * @email   soulteary@qq.com
 * @website http://soulteary.com
 */

if (!defined('FILE_PREFIX')) include "../error-forbidden.php";

abstract class Safe extends Core
{
    /**
     * 过滤请求中的非法字符
     *
     * @since 1.0.1
     *
     * @return boolean 请求是否合法。
     */
    protected function validate()
    {
        $keyword = array("'", ";", "union", " ", "　", "%");
        $redirect = "";
        function is_exist($score, $keyword)
        {
            foreach ($keyword as $key => $value) {
                if (strstr($score, $value)) {
                    return true;
                }
            }

            return false;
        }

        $allvars = $_REQUEST;

        foreach ($allvars as $key => $value) {
            if (is_exist($value, $keyword)) {
                echo "<script language=\"javascript\">alert(\"感谢你的测试,如果有漏洞,不妨告诉我,谢谢!\");</script>";
                if (empty($redirect)) {
                    echo "<script language=\"javascript\">history.go(-1);</script>";
                } else {
                    echo "<script language=\"javascript\">window.location=\"" . $redirect . "\";</script>";
                }
                exit;
            }
        }
    }

}
