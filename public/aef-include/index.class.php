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

        $params['header']['pageName'] = 'home';
        $params['nav'] = array(
            'showHomeMenu' => false,
            'showJoinMenu' => true
        );
        $params['body'] = array();

        // 每年10月开始下一年度志愿者招募
        if (date('m') > 10) {
            $subTitleYear = date('Y') + 1;
        } else {
            $subTitleYear = date('Y');
        }
        $params['body']['subTitleYear'] = $subTitleYear;

        $params['footer'] = array(
            'showFriendLinks' => true,
            'currentYear'     => date('Y')
        );

        new Template($params);
    }
}
