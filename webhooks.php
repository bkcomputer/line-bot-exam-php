<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = '/rx52zV39CbiEnDSoo7/V1P+qd+iS1TI2w7mCMpAvSmTaeRXb32vbptmmWoiNQvvQfPG3W6xkDneCqv2YAzRyUeBzZROnNdgspO6XULmWO1ZGURnWLB9Gvjj6IQf/waChd+PoS0m1mf+uQmviaGWpgdB04t89/1O/w1cDnyilFU=';
//5bdfd2be5398f03663e5f9c8 Bank
//5be6b88701327a4ed47f251c Multi



// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['message']['type'] == 'sticker') {
			// Get text sent
			$text = $event['source']['userId'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			

			//$head = urlencode($event['message']['text'])."-".date('m/d/Y');
			
			
			
			
			
			
			$messages = [
				'type' => 'text',
				'text' => $content
			];
			
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
	//https://developers.trello.com/v1.0/reference#listsidmoveallcards
}
echo "OK";
