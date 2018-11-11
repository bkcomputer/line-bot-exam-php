<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
//API Key de2dc6ea5b95210c5f7ab253415725f7
//Token Authen  45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443

$access_token = '/rx52zV39CbiEnDSoo7/V1P+qd+iS1TI2w7mCMpAvSmTaeRXb32vbptmmWoiNQvvQfPG3W6xkDneCqv2YAzRyUeBzZROnNdgspO6XULmWO1ZGURnWLB9Gvjj6IQf/waChd+PoS0m1mf+uQmviaGWpgdB04t89/1O/w1cDnyilFU=';
//5bdfd2be5398f03663e5f9c8 Bank
//5be6b88701327a4ed47f251c Multi

//5be6ea2338cc804e19b8f71b Card


//curl -v -F token={45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443} -F file=@test.pdf https://api.trello.com/1/cards/5be6ea2338cc804e19b8f71b/attachments\?key\={de2dc6ea5b95210c5f7ab253415725f7}\&token\={45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443}

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
			
			$url = "https://api.trello.com/1/lists/5be6b88701327a4ed47f251c/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443"
			# init curl
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			//curl_setopt($ch, CURLOPT_POSTFIELDS, $encoded_fields);
			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLINFO_HEADER_OUT, TRUE); // make sure we see the sended header afterwards
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_TIMEOUT, 0);
			//curl_setopt($ch, CURLOPT_POST, 1);
			# dont care about ssl
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			# download and close
			$output = curl_exec($ch);
			$request =  curl_getinfo($ch, CURLINFO_HEADER_OUT);
			$error = curl_error($ch);
			
			
			
			curl_close($ch);
			
			
			echo 'This is output = '.$output .'<br />';
			//echo 'This is request = '.$request .'<br />';
			//echo 'This is error = '.$error .'<br />';
				
				
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
