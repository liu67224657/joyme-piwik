<?php

/**
 * Description of monitorVisit
 * 
 * 
 * @author clarkzhao
 * @date 2015-06-12 11:48:14
 * @copyright joyme.com
 */
if (!defined('PIWIK_INCLUDE_PATH')) {
    define('PIWIK_INCLUDE_PATH', realpath(dirname(__FILE__) . "/../.."));
}

if (!defined('PIWIK_USER_PATH')) {
    define('PIWIK_USER_PATH', PIWIK_INCLUDE_PATH);
}

if (!class_exists('Piwik\Console', false)) {
    define('PIWIK_ENABLE_DISPATCH', false);
    define('PIWIK_ENABLE_ERROR_HANDLER', false);
    define('PIWIK_ENABLE_SESSION_START', false);
    require_once PIWIK_INCLUDE_PATH . "/index.php";
}

use Piwik\Common;
use Piwik\Timer;
use Piwik\Tracker;
use Piwik\Log;
use Piwik\IP;
use Piwik\RedisOP;

$GLOBALS['PIWIK_TRACKER_DEBUG'] = false;
$GLOBALS['PIWIK_ENABLE_TRACKING'] = true;
$process = new Tracker();
$table = Redis_Piwik_Table;
$redisHelper = new RedisOP(Redis_Piwik_Host, Redis_Piwik_Port);

while (true) {

    $params = $redisHelper->blPop($table);
    try {
        $process->initRequests(null);
        $process->inputByCache($params);
    } catch (Exception $e) {
        echo "Error:" . $e->getMessage();
        sleep(5);
    }
}
?>