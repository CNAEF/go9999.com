<?php
/**
 * CNAEF
 *
 * 程序加载器。
 *
 * @version 1.0.1
 *
 * @email   soulteary@qq.com
 * @website http://soulteary.com
 */

if (!defined('FILE_PREFIX')) include "error-forbidden.php";

define('ABSPATH', dirname(__FILE__) . '/');

error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE);

if (file_exists(ABSPATH . FILE_PREFIX . 'config.php')) {

    require_once(ABSPATH . FILE_PREFIX . 'config.php');

} else {
    die('找不到网站配置。');
}
