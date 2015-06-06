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

class Join extends Safe
{
    private $args = [];

    function __construct()
    {
        $this->args = core::init_args(func_get_args());
        try {

        } catch (Exception $exception) {

        }
        echo 'join';
    }
}