<?php /*
 * Copyright (C) 2017 All rights reserved.
 *   
 * @File ApprovalTest.php
 * @Brief 
 * @Author abelzhu, abelzhu@tencent.com, sugarfishes
 * @Version 1.0
 * @Date 2017-12-27
 *
 */

namespace sugarfishes\corpWechat\api\examples;

use Exception;
use sugarfishes\corpWechat\api\src\CorpAPI;
use sugarfishes\corpWechat\api\src\ServiceCorpAPI;
use sugarfishes\corpWechat\api\src\ServiceProviderAPI;
// 
$config = require('./config.php');
// 
$api = new CorpAPI($config['CORP_ID'], $config['APPROVAL_APP_SECRET']);
 
try {
    $ApprovalDataList = $api->ApprovalDataGet(1513649733, 1513770113);
    // var_dump($ApprovalDataList);
} catch (Exception $e) { 
    echo $e->getMessage() . "\n";
}

