<?php

define('ROOT', realpath(dirname(__FILE__) . '/../') . '/');
include(ROOT . "/config/ConfBase.php");

class Conf extends ConfBase {

    public static $domain = array('host' => 'caituan.rank123.org', 'expire' => 86400, 'path' => '/');
    public static $logPath = '/data/www/caituan/inc/log/';

}
