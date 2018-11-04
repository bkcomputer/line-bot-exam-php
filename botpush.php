<?php



require "vendor/autoload.php";

$access_token = '/rx52zV39CbiEnDSoo7/V1P+qd+iS1TI2w7mCMpAvSmTaeRXb32vbptmmWoiNQvvQfPG3W6xkDneCqv2YAzRyUeBzZROnNdgspO6XULmWO1ZGURnWLB9Gvjj6IQf/waChd+PoS0m1mf+uQmviaGWpgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '6ef616402eb039e9e57916e124de0e4d';

$pushID = 'U400a81891a5ff558bd4d6c15adf9b16a';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('แอบคุยกับกิ๊กหรอค่ะ');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







