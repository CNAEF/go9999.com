<?php
/**
 * CNAEF
 *
 * 网站留言墙。
 *
 * @version 1.0.1
 *
 * @include
 *
 * @email   soulteary@qq.com
 * @website http://soulteary.com
 */

if (!defined('FILE_PREFIX')) include "../error-forbidden.php";

class Contact extends Safe
{
    function __construct()
    {
        $params = func_get_args()[0];

        $params['header'] = array(
            'pageName' => 'contact'
        );

        $params['nav'] = array(
            'showHomeMenu' => true,
            'showJoinMenu' => true
        );

        $params['body'] = array();
        $params['body_file'] = 'contact';


        $params['footer'] = array(
            'showFriendLinks' => true,
            'currentYear'     => date('Y')
        );

        new Template($params);
    }
}
