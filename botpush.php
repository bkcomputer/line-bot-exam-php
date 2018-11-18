<?php



require "vendor/autoload.php";

$access_token = '/rx52zV39CbiEnDSoo7/V1P+qd+iS1TI2w7mCMpAvSmTaeRXb32vbptmmWoiNQvvQfPG3W6xkDneCqv2YAzRyUeBzZROnNdgspO6XULmWO1ZGURnWLB9Gvjj6IQf/waChd+PoS0m1mf+uQmviaGWpgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '6ef616402eb039e9e57916e124de0e4d';

$pushID = 'C330aac644f741be04358c14de9ca0d2a';//'Ue5012e668f8c66f02959ac9c23cc3d4b';//'C330aac644f741be04358c14de9ca0d2a';//'U400a81891a5ff558bd4d6c15adf9b16a';//

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);


$response = $bot->getProfile('Ue5012e668f8c66f02959ac9c23cc3d4b');
if ($response->isSucceeded()) {
    $profile = $response->getJSONDecodedBody();
    $text = "@". $profile['displayName'] ." \\n". $profile['statusMessage'];

    $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($text);
    $response = $bot->pushMessage($pushID, $textMessageBuilder);

    echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
   
}





// $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<channel access token>');
// $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<channel secret>']);

// $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
// $response = $bot->pushMessage('<to>', $textMessageBuilder);

// echo $response->getHTTPStatus() . ' ' . $response->getRawBody();


// $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<channel access token>');
// $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<channel secret>']);
// $response = $bot->getProfile('<userId>');
// if ($response->isSucceeded()) {
//     $profile = $response->getJSONDecodedBody();
//     echo $profile['displayName'];
//     echo $profile['pictureUrl'];
//     echo $profile['statusMessage'];
// }
