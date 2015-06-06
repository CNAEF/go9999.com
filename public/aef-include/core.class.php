<?php
/**
 * CNAEF
 * 程序核心函数库。
 *
 * @version 1.0.1
 *
 * @include
 *          - @function associative_push            创建关联数组
 *          - @function init_args                   初始化传递参数
 *          - @function parseMarkdown               将MarkDown格式的内容转换为HTML输出
 *          - @function get_mircotime               输出毫秒时间
 *          - @function scan_website                获取网站目录树
 *          - @function scan_dir                    获取网站文件夹列表
 *          - @function scan_file                   获取网站文件列表
 *          - @function display_file_permissions    读取文件夹权限
 *          - @function gzip_accepted               判断服务器是否支持GZIP
 *
 *
 * @email   soulteary@qq.com
 * @website http://soulteary.com
 */


if (!defined('FILE_PREFIX')) include "../error-forbidden.php";

/**
 * 用于保存程序启动参数
 */
global $arguments;

class Core
{

    /**
     * 创建关联数组
     *
     * @since 1.0.1
     *
     * @eg. $result = core::associative_push($target, $data);
     * @param array $arr 要被创建的关联数组。
     * @param array $tmp 要被填充为新数组内容的临时数组。
     *
     * @return array $arr 创建好的关联数组。
     */
    public function associative_push($arr, $tmp)
    {
        if (is_array($tmp)) {
            foreach ($tmp as $key => $value) {
                $arr[ $key ] = $value;
            }

            return $arr;
        }

        return false;
    }

    /**
     * 初始化传递参数
     *
     * @since 1.0.1
     *
     * @use   core::associative_push();
     * @eg. $this->args = core::init_args(func_get_args());
     *
     * @param array $args 传递进来的参数。
     *
     * @return array $result 序列化好的新数组。
     */
    public function init_args($args)
    {
        global $arguments;

        $result = [];
        for ($i = 0, $n = count($args); $i < $n; $i++) {
            $result = self::associative_push($args[ $i ], $result);
        }

        $arguments = $result;

        return $arguments;
    }

    public function get_args()
    {
        global $arguments;

        return $arguments;
    }

    /**
     * 输出毫秒时间。
     *
     * @since 1.0.1
     *
     * @eg. core::get_mircotime();
     * @return float 当前时间的毫秒时间。
     */
    public function get_mircotime()
    {
        list($usec, $sec) = explode(" ", microtime());

        return ((float)$usec + (float)$sec);
    }

    /**
     * 获取网站目录树。
     *
     * @since  1.0.1
     *
     * @eg. core::scan_website($dir);
     * @params string $dir 要扫描的路径。
     *
     * @return array $items 目录下的文件列表。
     */
    public function scan_website($dir)
    {
        $items = glob($dir . '/*', GLOB_NOSORT);
        clearstatcache();
        for ($i = 0; $i < count($items); $i++) {
            if (is_dir($items[ $i ])) {
                $add = glob($items[ $i ] . '/*', GLOB_NOSORT);
                $items = array_merge($items, $add);
            }
        }

        return $items;
    }

    /**
     * 获取网站文件夹列表。
     *
     * @since  1.0.1
     *
     * @eg. core::scan_dir($dir);
     * @params string $dir 要扫描的路径。
     *
     * @return array $items 目录下的文件夹列表。
     */
    public function scan_dir($dir)
    {
        $items = $this->scan_website($dir);
        clearstatcache();
        for ($i = 0; $i < count($items); $i++) {
            if (!is_dir($items[ $i ])) {
                $items[ $i ] = null;
            }
        }
        $items = array_flip(@array_flip($items));

        return $items;
    }

    /**
     * 获取网站文件列表。
     *
     * @since  1.0.1
     *
     * @notice 这里用到一个数组hacks，不喜者自己替换掉。
     * @eg. core::scan_file($dir);
     *
     * @params string $dir 要扫描的路径。
     *
     * @return array $items 目录下的文件列表。
     */
    public function scan_file($dir)
    {
        $items = $this->scan_website($dir);
        clearstatcache();
        for ($i = 0; $i < count($items); $i++) {
            if (is_dir($items[ $i ])) {
                $items[ $i ] = null;
            }
        }
        $items = array_flip(@array_flip($items));

        return $items;
    }

    /**
     * 读取文件夹权限。
     *
     * @since  1.0.1
     *
     * @todo
     *       - 添加功能到安装脚本中，并测试。
     * @eg. core::display_file_permissions($filePath);
     *
     * @params string $filePath 要读取的文件的路径。
     *
     * @return string $result 文件的权限描述字符串。
     */
    public function display_file_permissions($filePath)
    {
        $Mode = fileperms($filePath);
        // Determine Type
        if ($Mode & 0x1000) {
            $Type = 'p';
        }// FIFO pipe
        else if ($Mode & 0x2000) {
            $Type = 'c';
        }// Character special
        else if ($Mode & 0x4000) {
            $Type = 'd';
        }// Directory
        else if ($Mode & 0x6000) {
            $Type = 'b';
        }// Block special
        else if ($Mode & 0x8000) {
            $Type = '-';
        }// Regular
        else if ($Mode & 0xA000) {
            $Type = 'l';
        }// Symbolic Link
        else if ($Mode & 0xC000) {
            $Type = 's';
        }// Socket
        else {
            $Type = 'u';
        }// UNKNOWN

        // Determine permissions
        $Owner['read'] = ($Mode & 00400) ? 'r' : '-';
        $Owner['write'] = ($Mode & 00200) ? 'w' : '-';
        $Owner['execute'] = ($Mode & 00100) ? 'x' : '-';
        $Group['read'] = ($Mode & 00040) ? 'r' : '-';
        $Group['write'] = ($Mode & 00020) ? 'w' : '-';
        $Group['execute'] = ($Mode & 00010) ? 'x' : '-';
        $World['read'] = ($Mode & 00004) ? 'r' : '-';
        $World['write'] = ($Mode & 00002) ? 'w' : '-';
        $World['execute'] = ($Mode & 00001) ? 'x' : '-';

        // Adjust for SUID, SGID and sticky bit
        if ($Mode & 0x800) $Owner['execute'] = ($Owner['execute'] == 'x') ? 's' : 'S';
        if ($Mode & 0x400) $Group['execute'] = ($Group['execute'] == 'x') ? 's' : 'S';
        if ($Mode & 0x200) $World['execute'] = ($World['execute'] == 'x') ? 't' : 'T';

        $result = $Type . $Owner['read'] . $Owner['write'] . $Owner['execute'];
        $result .= $Group['read'] . $Group['write'] . $Group['execute'];
        $result .= $World['read'] . $World['write'] . $World['execute'];

        return $result;
    }

    /**
     * 判断服务器是否支持GZIP，并防止重复压缩。
     *
     * @since 1.0.1
     *
     * @eg. core::gzip_accepted();
     * @return boolean 服务器是否支持GZIP。
     */
    public function gzip_accepted()
    {
        $enable = strtolower(ini_get('zlib.output_compression'));
        if (1 == $enable || "on" == $enable) {
            return false;
        }

        if (!isset($_SERVER['HTTP_ACCEPT_ENCODING']) || (isset($_SERVER['HTTP_ACCEPT_ENCODING']) && strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') === false)) {
            return false;
        }

        return true;
    }

    /**
     * 判断是否是Ajax请求
     *
     * @since 1.0.1
     *
     * @return bool
     */
    public function isAjax()
    {
        return isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && $_SERVER["HTTP_X_REQUESTED_WITH"] == 'XMLHttpRequest' ? true : false;
    }


    /**
     * 是否有callback
     *
     * @since 1.0.1
     *
     * @return bool
     */
    public function isCallback()
    {
        $useCallback = true;
        // 限制callback name长度为30字符长度
        if (isset($_GET['CallbackName'])) {
            if (strlen($_GET['CallbackName']) && strlen($_GET['CallbackName']) < 30) {
                $callbackName = $_GET['CallbackName'];
            } else {
                $callbackName = 'callback';
            }
        } else {
            $callbackName = "callback";
        }
        $useCallbackName = $_GET[ $callbackName ] ? $_GET[ $callbackName ] : "";
        if (empty($useCallbackName)) {
            $useCallback = false;
        }

        return $useCallback;
    }

}
