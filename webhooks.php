<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = 'DhVVKfid34tkEUBjY9rliuvWiNA4QPAe1XrsijIoaOXq9dzFUlUGLBp8lUYnXN5hZQ2aWtKfMm9sj+KvlI9yE1I5mNTh6pX3Md1HHDaqj7MlgX1tzQWEXvXGvrbEpGI10yWrMjcaWfmVq+Igit422gdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		//if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['source']['userId'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			

			$head = urlencode($event['message']['text'])."-".date('m/d/Y');
			
			
			//5be2658aa5b1b615863f6d45 PM @Monster_P @BANK DEV
			//5be26448b284fe18ca0f60e4 Design @Pure
			//5be26421e7ef14154e8e1719 IOS @Ton
			//5be2642571a7725bc73d523b Android @iSymphonyz
			//5be264422464ad09fa4116bf CMS @เสี่ยหมี
		
			$board = "";
			if (strpos($event['message']['text'], '@Monster_P') !== false) {
			    $board = "5be2658aa5b1b615863f6d45";
			}else if (strpos($event['message']['text'], '@BANK DEV') !== false) {
			     $board = "5be2658aa5b1b615863f6d45";
			}else if (strpos($event['message']['text'], '@Pure') !== false) {
			    $board = "5be26448b284fe18ca0f60e4";
			}else if (strpos($event['message']['text'], '@Ton') !== false) {
			    $board = "5be26421e7ef14154e8e1719";
			}else if (strpos($event['message']['text'], '@iSymphonyz') !== false) {
			    $board = "5be2642571a7725bc73d523b";
			}else if (strpos($event['message']['text'], '@เสี่ยหมี') !== false) {
			    $board = "5be264422464ad09fa4116bf";
			}else{
			    $board = "5be2658aa5b1b615863f6d45";
			}
			
			
			
			$url = 'https://api.trello.com/1/cards?name=';
			$url .=$head;
			
			//$url .= $event['source']['userId'];
			$url .='&desc=';
			$url .= urlencode($event['message']['text']);
			
			
			$url .='&idList=';
			$url .=$board;
			$url .='&keepFromSource=all&key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443';
			
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
			
			
			$respones = json_decode($result, true);
			
			$messages = [
				'type' => 'text',
				'text' => $respones['shortUrl']//$content
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
		//}
	}
}
echo "OK";
