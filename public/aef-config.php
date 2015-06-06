<?php
/**
 * CNAEF
 *
 * 程序基础设置文件
 * 文件包含以下内容：文件版本、调试模式开关、主题选择、GZIP压缩开关、语言设置、字符集设置。
 *
 * @version 1.0.1
 *
 * @email   soulteary@qq.com
 * @website http://soulteary.com
 */

if (!defined('FILE_PREFIX')) include "error-forbidden.php";

date_default_timezone_set('PRC');

/** 程序版本 */
define("VERSION", "1.0.1");
/** 调试模式开关 */
define('DEBUG', false);
/** 主题选择 */
define('THEME', 'default');
/** 开启GZIP压缩(如果调试模式被激活，那么忽略此设置。) */
define('GZIP', true);
/** 语言设置 */
define('C_LANG', 'zh-CN');
/** 字符集设置 */
define('C_CHARSET', 'utf-8');

/** 站点名称 */
define('C_SITE_NAME', '中国·支教联盟');


/** 载入程序模块 */
function __autoload($classname)
{

    $fileName = ABSPATH . FILE_PREFIX . "include/" . strtolower($classname);
    $classFile = $fileName . ".class.php";
    $libFile = $fileName . ".lib.php";

    if (file_exists($libFile)) {
        include($libFile);
    }
    if (file_exists($classFile)) {
        include($classFile);
    }

}

/** 输出网站内容 */
$CNAEF = new App(['THEME' => THEME, 'GZIP' => GZIP, 'DEBUG' => DEBUG]);

