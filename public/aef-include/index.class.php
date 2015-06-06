<?php
/**
 * CNAEF
 *
 * 网站首页。
 *
 * @version 1.0.1
 *
 * @include
 *
 * @email   soulteary@qq.com
 * @website http://soulteary.com
 */

if (!defined('FILE_PREFIX')) include "../error-forbidden.php";

class Index extends Safe
{
    function __construct()
    {
        $params = func_get_args()[0];
        $params['footer'] = true;
        $params['body'] = true;

        new Template($params);
    }
}
