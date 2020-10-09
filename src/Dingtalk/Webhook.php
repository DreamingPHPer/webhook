<?php
namespace Dreamboy\Webhook\Dingtalk;

// 引入SDK
include __DIR__ . '/sdk/TopSdk.php';

/**
 * Class Webhook
 * @package Dreamboy\Webhook\Dingtalk
 */
class Webhook {
    /**
     * @param $baseUrl
     * @param $msgType
     */
    public function send($baseUrl, $msgType)
    {
        $client = new \DingTalkClient(\DingTalkConstant::$CALL_TYPE_OAPI, \DingTalkConstant::$METHOD_GET , \DingTalkConstant::$FORMAT_JSON);
        $request = new \OapiRobotSendRequest();
        $response = $client->execute($request, null, $baseUrl);
        var_dump($response);
    }
}