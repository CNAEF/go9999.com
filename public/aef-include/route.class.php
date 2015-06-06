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

global $RouteSimpleRules;
global $RouteRegexpRules;

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
     * @since 0.0.1
     *
     * @param $uri
     *
     * @return bool
     */
    private function matchRule($uri)
    {
        global $RouteSimpleRules;
        global $RouteRegexpRules;

        // 第一次匹配完全相等的
        foreach ($RouteSimpleRules as $rule => $execute) {
            if ($rule === $uri) {
                app::$execute();

                return true;
            }
        }
        // 第二次进行正则匹配
        foreach ($RouteRegexpRules as $rule => $execute) {
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
     * @since       0.0.1
     *
     * @param      $routeName
     * @param      $func
     * @param bool $isRegexp
     */
    static function register($routeName, $func, $isRegexp = false)
    {
        global $RouteSimpleRules;
        global $RouteRegexpRules;

        $rule = func_get_args();

        switch (count($rule)) {
            case 2:
                $RouteSimpleRules[ $rule[0] ] = $rule[1];
                break;
            case 3:
                if ($isRegexp) {
                    $RouteRegexpRules[ $rule[0] ] = $rule[1];
                } else {
                    $RouteSimpleRules[ $rule[0] ] = $rule[1];
                }
                break;
            default:
                die('注册路由参数错误。');
        }

    }


    function test()
    {
        $url = strtolower($_SERVER['REQUEST_URI']);

        try {

        } catch (Exception $exception) {

        }
    }
}