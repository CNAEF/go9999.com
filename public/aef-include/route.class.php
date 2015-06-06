<?php
/**
 * CNAEF
 *
 * 网站路由。
 *
 * @version 1.0.1
 *
 * @include
 *
 * @email   soulteary@qq.com
 * @website http://soulteary.com
 */

if (!defined('FILE_PREFIX')) include "../error-forbidden.php";

global $RouteRules;

class Route extends Safe
{

    function __construct()
    {
        $current_uri = strtolower($_SERVER['REQUEST_URI']);
        $len = strlen($current_uri);
        // 当请求路径非根目录时，去掉URI请求后的`/`
        if ($len > 1 && substr($current_uri, $len - 1, 1) === '/') {
            $current_uri = substr($current_uri, 0, $len - 1);
        }
        $this->matchRule($current_uri);
    }

    /**
     * 匹配网站路由
     *
     * @param $uri
     *
     * @return bool
     */
    private function matchRule($uri)
    {
        global $RouteRules;

        // 第一次匹配完全相等的
        foreach ($RouteRules as $rule => $execute) {
            if ($rule === $uri) {
                app::$execute();

                return true;
            }
        }
        // 第二次进行正则匹配
        foreach ($RouteRules as $rule => $execute) {
            $regexp = '/^' . str_replace('/', '\/', $rule) . '$/';
            if (preg_match($regexp, $uri)) {
                app::$execute();

                return true;
            }
        }

        return false;
    }

    /**
     * 注册路由
     *
     * @param $routeName
     * @param $func
     */
    static function register($routeName, $func)
    {
        global $RouteRules;

        $rule = func_get_args();

        if (count($rule) !== 2) {
            die('注册路由必须传递两个参数');
        }

        $RouteRules[ $rule[0] ] = $rule[1];
    }


    function test()
    {
        $url = strtolower($_SERVER['REQUEST_URI']);

        try {

        } catch (Exception $exception) {

        }
    }
}