<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = '/rx52zV39CbiEnDSoo7/V1P+qd+iS1TI2w7mCMpAvSmTaeRXb32vbptmmWoiNQvvQfPG3W6xkDneCqv2YAzRyUeBzZROnNdgspO6XULmWO1ZGURnWLB9Gvjj6IQf/waChd+PoS0m1mf+uQmviaGWpgdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['source']['userId'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			

			$head = urlencode($event['message']['text'])."-".date('m/d/Y');
			
			
			
			
			$board = "";//Bank
			if ($event['source']['userId'] == 'U71132754ed4afdf5f59079a51df281ad'){
				$board = "5a544bc7b2f767692ac8d7f2";//rock
			}else if ($event['source']['userId'] == 'U380c91bd373503d6091d9cb6bab69dc9'){
				$board = "5a544bc7b2f767692ac8d7f3";//game
			}else if ($event['source']['userId'] == 'U1c56ba24ab998d75e24ed8086bec265e'){
				$board = "5a544bc7b2f767692ac8d7f4";//king
			}else if ($event['source']['userId'] == 'Uc91b7c0fb01650922aee6505bc4a12e4'){
				$board = "5bdfd26faf59144e2f02e590";//aun
			}else if ($event['source']['userId'] == 'Uc309235f42743a619d473be78771f7bd'){
				$board = "5bdfd2c5730ddf2d83ce5d5a";//zam
			}else if ($event['source']['userId'] == 'Ue5012e668f8c66f02959ac9c23cc3d4b'){
				$board = "5bdfd2be5398f03663e5f9c8";//bank
			}else if($event['source']['userId'] == 'U8334cfd8e9e63b0ab3f0d897805c1f20'){
				$board = "5be0352eaa5d0a361597d20d";//p'POR
			}else if($event['source']['userId'] == 'U70033911da2c7dd02f79b9d334517845'){
				$board = "5be120d4a2b5513b41ed843b";//p'Pnui
			}else{
				$head .= "NewUser".$event['source']['userId'];
				$board = "5bdfd2be5398f03663e5f9c8";//Bank
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
		}
	}
}
echo "OK";
