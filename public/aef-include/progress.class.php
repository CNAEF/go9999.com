<?php
/**
 * CNAEF
 *
 * 报名页面。
 *
 * @version 1.0.1
 *
 * @include
 *
 * @email   soulteary@qq.com
 * @website http://soulteary.com
 */

if (!defined('FILE_PREFIX')) include "../error-forbidden.php";

class Progress extends Safe
{
    function __construct()
    {
        $DB = new MySql(array('MODE' => 'WRITE' , 'DEBUG' => DEBUG));

        $sql = "select name,user_status,verify_time,verify_status,time from user_info where time>'".date('Y-m-d H:i:s', time()-(86400*180))."' order by id desc limit 1000";
        $query = $DB->query($sql);

        $records = [];
        while($record = $DB->fetch_array($query)) {
            $records[] = $record;
        }

        $params = func_get_args()[0];

        $params['header']['pageName'] ='progress';

        $params['nav'] = array(
            'showHomeMenu' => true,
            'showJoinMenu' => false
        );

        $params['body'] = array(
            'records' => $records
        );
        $params['body_file'] = 'progress';

        $params['footer'] = [
            'showFriendLinks' => true,
            'currentYear'     => date('Y')
        ];

        new Template($params);
    }
}