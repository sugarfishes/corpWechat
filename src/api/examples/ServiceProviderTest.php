<?php /*
 * Copyright (C) 2017 All rights reserved.
 *   
 * @File ServiceProviderTest.php
 * @Brief 
 * @Author abelzhu, abelzhu@tencent.com, sugarfishes
 * @Version 1.0
 * @Date 2017-12-26
 *
 */

namespace sugarfishes\corpWechat\api\examples;

use Exception;
use sugarfishes\corpWechat\api\datastructure\GetRegisterCodeReq;
use sugarfishes\corpWechat\api\datastructure\SetAgentScopeReq;
use sugarfishes\corpWechat\api\src\CorpAPI;
use sugarfishes\corpWechat\api\src\ServiceCorpAPI;
use sugarfishes\corpWechat\api\src\ServiceProviderAPI;
 
try {
    $ServiceProviderAPI = new ServiceProviderAPI(
        "CORPID", 
        "PROVIDER_SECRET"
    );
    //

    //
    $GetRegisterCodeReq = new GetRegisterCodeReq();
    {
        $GetRegisterCodeReq->template_id = "template_id";
        $GetRegisterCodeReq->corp_name = "corp_name";
    }
    $register_code = $ServiceProviderAPI->GetRegisterCode($GetRegisterCodeReq);
    // var_dump($register_code);

    //
    $GetLoginInfoRsp = $ServiceProviderAPI->GetLoginInfo("xxxxxxxxxxxxxx");
} catch (Exception $e) { 
    echo $e->getMessage() . "\n";
}

try {
    $ServiceProviderAPI = new ServiceProviderAPI();

    $access_token = "xxxxxxxxxxxxxx";
    //
    $SetAgentScopeReq = new SetAgentScopeReq();
    {
        $SetAgentScopeReq->agentid = 11111111;
    }
    $SetAgentScopeRsp = $ServiceProviderAPI->SetAgentScope($access_token, $SetAgentScopeReq);
    // var_dump($SetAgentScopeRsp);

    //
    $ServiceProviderAPI->SetContactSyncSuccess($access_token);
} catch (Exception $e) { 
    echo $e->getMessage() . "\n";
}


try {
} catch (Exception $e) { 
    echo $e->getMessage() . "\n";
}

