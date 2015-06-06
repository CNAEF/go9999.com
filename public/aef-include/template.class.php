<?php
/**
 * CNAEF
 *
 * 模板页面。
 *
 * @version 1.0.1
 *
 * @include
 *
 * @email   soulteary@qq.com
 * @website http://soulteary.com
 */

if (!defined('FILE_PREFIX')) include "../error-forbidden.php";

class Template extends RainTPL
{
    private $args = [];
    private $process_time_start;
    private $process_time_end;
    protected $tpl = null;

    function __construct()
    {
        $this->args = core::get_args();
        if ($this->args['DEBUG']) {
            $this->mktimestamp();
        }

        $params = func_get_args()[0];

        $this->initTemplate();
        ob_start();

        if (isset($params['header'])) {
            $params['header']['assets'] = C_ASSETS_PREFIX;
            if (isset($params['header_file'])) {
                $this->header($params['header'], $params['header_file']);
            } else {
                $this->header($params['header']);
            }
        }

        if (isset($params['nav'])) {
            $params['header']['assets'] = C_ASSETS_PREFIX;
            if (isset($params['nav_file'])) {
                $this->nav($params['nav'], $params['nav_file']);
            } else {
                $this->nav($params['nav']);
            }
        }

        if (isset($params['body'])) {
            $params['header']['assets'] = C_ASSETS_PREFIX;
            if (isset($params['body_file'])) {
                $this->body($params['body'], $params['body_file']);
            } else {
                $this->body($params['body']);
            }
        }

        if (isset($params['footer'])) {
            $params['header']['assets'] = C_ASSETS_PREFIX;
            if (isset($params['footer_file'])) {
                $this->footer($params['footer'], $params['footer_file']);
            } else {
                $this->footer($params['footer']);
            }
        }

        $modTpl = ob_get_contents();
        ob_end_clean();

        exit($modTpl);
    }

    /**
     * 获取当前脚本运行时间
     *
     * @since 1.0.1
     *
     * @param bool $end
     *
     * @return string
     */
    protected function mktimestamp($end = false)
    {
        if (!$end) {

            $this->process_time_start = core::get_mircotime();

        } else {

            $this->process_time_end = core::get_mircotime();

            return number_format($this->process_time_end - $this->process_time_start, 5);
        }
    }

    /**
     * 初始化模板
     *
     * @since 1.0.1
     *
     * @param bool $empty
     *
     * @return bool
     */
    private function initTemplate($empty = false)
    {
        if ($empty) {
            return true;
        }
        if (file_exists(FILE_PREFIX . 'content/theme/' . THEME . '/')) {
            RainTPL::$tpl_dir = FILE_PREFIX . 'content/theme/' . THEME . '/';
            RainTPL::$cache_dir = FILE_PREFIX . 'content/theme/' . THEME . '_cache/';
        } else {
            RainTPL::$tpl_dir = FILE_PREFIX . 'content/theme/default/';
            RainTPL::$cache_dir = FILE_PREFIX . 'content/theme/default_cache/';
        }

        RainTPL::$tpl_ext = 'tpl.php';
        RainTPL::$path_replace = false;
        $this->tpl = new RainTPL();
    }

    /**
     * 获得页面头部模板
     *
     * @since 1.0.1
     *
     * @param        $data
     * @param string $tpl_name
     * @param bool   $echo
     *
     * @return mixed
     */
    private function header($data, $tpl_name = 'header', $echo = true)
    {
        return $this->get_template($data, $tpl_name, $echo);
    }

    /**
     * 获得页面导航模板
     *
     * @since 1.0.1
     *
     * @param        $data
     * @param string $tpl_name
     * @param bool   $echo
     *
     * @return mixed
     */
    private function nav($data, $tpl_name = 'nav', $echo = true)
    {
        return $this->get_template($data, $tpl_name, $echo);
    }

    /**
     * 获得页面主要内容模板
     *
     * @since 1.0.1
     *
     * @param        $data
     * @param string $tpl_name
     * @param bool   $echo
     *
     * @return mixed
     */
    private function body($data, $tpl_name = 'index', $echo = true)
    {
        return $this->get_template($data, $tpl_name, $echo);
    }

    /**
     * 获得页面尾部模板
     *
     * @since 1.0.1
     *
     * @param        $data
     * @param string $tpl_name
     * @param bool   $echo
     *
     * @return mixed
     */
    private function footer($data, $tpl_name = 'footer', $echo = true)
    {

        if ($this->args['DEBUG']) {
            $this->tpl->assign("DEBUG_PAGE_ARGU", $this->args);
            $this->tpl->assign("DEBUG_DATA", Debug::theDebug());
            $timestamp = $this->mktimestamp(true);
            $timestamp = "\n<!--Process in $timestamp seconds.-->\n";
            $this->tpl->assign("DEBUG_TIMESTAMP", $timestamp);
        }

        return $this->get_template($data, $tpl_name, $echo);
    }

    /**
     * 根据模板名称渲染模板
     *
     * @since 1.0.1
     *
     * @param $data
     * @param $tpl_name
     * @param $echo
     *
     * @return mixed
     */
    private function get_template($data, $tpl_name, $echo)
    {
        $this->tpl->assign($data);
        $html = $this->tpl->draw($tpl_name, $return_string = true);
        if ($echo) {
            echo $html;
        } else {
            return $html;
        }
    }
}
