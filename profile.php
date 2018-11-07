<?php


$access_token = 'DhVVKfid34tkEUBjY9rliuvWiNA4QPAe1XrsijIoaOXq9dzFUlUGLBp8lUYnXN5hZQ2aWtKfMm9sj+KvlI9yE1I5mNTh6pX3Md1HHDaqj7MlgX1tzQWEXvXGvrbEpGI10yWrMjcaWfmVq+Igit422gdB04t89/1O/w1cDnyilFU=';

$userId = 'U71132754ed4afdf5f59079a51df281ad';

$url = 'https://api.line.me/v2/bot/message/8827579725868/content';
//

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

