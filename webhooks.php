<?php // callback.php

//Ue5012e668f8c66f02959ac9c23cc3d4b

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

function checkIsAValidDate($myDateString){
    return (bool)strtotime($myDateString);
}


//$due = urlencode(date('Y-m-d H:i:s', time() + (86400)));

$access_token = 'DlYQxhFxEeNvS9wLLTxdzOdhBD0dry3J6Mm7fiQuAiTDLEhc7ZpY/lsloQWh6ZdX5tacSWgQdxAskK0z2Olq2m1eDTt7dEyK0F1RRqsGpx22z245Km9E1sY/lZSkdAM+Xjp0v0gYgBun3Y+Kv/VD6QdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		
		//$time = "";
		//try {
		  //echo substr($event['message']['text'], -10);  // bcd
		  $time = substr($event['message']['text'], -10);
		  
		//} catch (Exception $e) {
		//  $time = "";
		  //echo "Invalid date...";
		//}
		
		//
		if ( ($event['source']['userId'] == "U5cd8ea45e804c64bd7d03a28225f48a8" || $event['source']['userId'] == "Ue5012e668f8c66f02959ac9c23cc3d4b" )&& $event['type'] == 'message' && $event['message']['type'] == 'text' && strpos($event['message']['text'], 'due') !== false ) {//&& (strpos($event['message']['text'], 'due') !== false)
			// Get text sent
			$text = $event['source']['userId'];
			// Get replyToken
                        $replyToken = $event['replyToken'];
			
			if(!checkIsAValidDate($time)){
				
				$url = 'https://api.line.me/v2/bot/message/reply';
				$arr_text = array("บรีฟวันนี้ เอาวันนี้ ..... ใครจะทำทันจ๊ะ!!!!!!","กำหนดวันให้ชัดเจนหน่อยจ้า","รีบแบบนี้ บรีฟตั้งแต่เมื่อวานสิจ๊ะ","บรีฟด่วน บรีฟเร่ง ขอให้บอก");
				$messages = [
				    'type' => 'text',
				    'text' => $arr_text[mt_rand(0,3)]
				];
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
				
			}else{
			

				$duedate = urlencode(date('Y-m-d H:i:s', strtotime($time) + (0)));//86400

				$fullText = $event['message']['text'];

				$fullText = str_replace( '@➰°PookPick°➿', '', $fullText);
				$fullText = str_replace( '@BANK DEV', '', $fullText);
				$fullText = str_replace( '@Pure', '', $fullText);
				$fullText = str_replace( '@North', '', $fullText);
				$fullText = str_replace( '@けんじ', '', $fullText);
				$fullText = str_replace( '@เสี่ยหมี', '', $fullText);
				$fullText = str_replace( '@Poo_za', '', $fullText);
				$fullText = str_replace( 'due', '-DueDate-', $fullText);



				$head = urlencode($fullText)."-AssignDate-".date('Y/m/d');

				//5bdc072ae0605e78a05a92c5 PM @➰°PookPick°➿ @BANK DEV
				//5bdc0ae66e82f44f8dc9506b Design @Pure
				//5bdc0730f8bb4e8b70992f25 IOS @North
				//5bdc0927cf837652b9c2e2b1 Android @けんじ
				//5bdc073f5622911911691960 CMS @เสี่ยหมี 
				//5bdc07424a0dda5b0a113620 Deploy @Poo_za

				$board = "";
				if (strpos($event['message']['text'], 'PookPick') !== false) {
					$board = "5bdc072ae0605e78a05a92c5";

					$url = 'https://api.trello.com/1/cards?name=';
					$url .= urlencode('@PookPick').$head;

					$url .='&desc=';
					$url .= urlencode($fullText);


					$url .='&idList=';
					$url .=$board;
					$due = $duedate;
					$url .='&pos=top&due=' . $due;
					$url .='&keepFromSource=all&key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443';


					$post = json_encode($data);
					$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
					$ch = curl_init($url);
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
					curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
					$result = curl_exec($ch);
					curl_close($ch);


				}			
				if (strpos($event['message']['text'], '@BANK DEV') !== false) {
				    $board = "5bdc072ae0605e78a05a92c5";

				    $url = 'https://api.trello.com/1/cards?name=';
				    $url .= urlencode('@BANK DEV').$head;


				    $url .='&desc=';



				    $url .= urlencode($fullText);


				    $url .='&idList=';
				    $url .=$board;
				    $due = $duedate;
				    $url .='&pos=top&due=' . $due;
				    $url .='&keepFromSource=all&key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443';


				    $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
				    $ch = curl_init($url);
				    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

				    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				    $result = curl_exec($ch);
				    curl_close($ch);



				} 
				if (strpos($event['message']['text'], '@Pure') !== false) {
				    $board = "5bdc0ae66e82f44f8dc9506b";

				    $url = 'https://api.trello.com/1/cards?name=';
				    $url .= urlencode('@Pure').$head;


				    $url .='&desc=';



				    $url .= urlencode($fullText);


				    $url .='&idList=';
				    $url .=$board;
				    $due = $duedate;
				    $url .='&pos=top&due=' . $due;
				    $url .='&keepFromSource=all&key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443';

				    $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
				    $ch = curl_init($url);
				    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				    $result = curl_exec($ch);
				    curl_close($ch);



				} 
				if (strpos($event['message']['text'], '@North') !== false) {
				    $board = "5bdc0730f8bb4e8b70992f25";

				    $url = 'https://api.trello.com/1/cards?name=';
				    $url .= urlencode('@North').$head;

				    //$url .= $event['source']['userId'];
				    $url .='&desc=';



				    $url .= urlencode($fullText);


				    $url .='&idList=';
				    $url .=$board;
				    $due = $duedate;
				    $url .='&pos=top&due=' . $due;
				    $url .='&keepFromSource=all&key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443';

				    // $data = [
				    // 	'replyToken' => $replyToken,
				    // 	'messages' => [$fullText],
				    // ];
				    // $post = json_encode($data);
				    $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
				    $ch = curl_init($url);
				    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				    $result = curl_exec($ch);
				    curl_close($ch);


				    // $respones = json_decode($result, true);

				    // $messages = [
				    // 	'type' => 'text',
				    // 	'text' => $respones['shortUrl']//$content
				    // ];



				    // // Make a POST Request to Messaging API to reply to sender
				    // $url = 'https://api.line.me/v2/bot/message/reply';
				    // $data = [
				    // 	'replyToken' => $replyToken,
				    // 	'messages' => [$messages],
				    // ];
				    // $post = json_encode($data);
				    // $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

				    // $ch = curl_init($url);
				    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				    // curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				    // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				    // $result = curl_exec($ch);
				    // curl_close($ch);

				    // echo $result . "\r\n";

				} 
				if (strpos($event['message']['text'], '@けんじ') !== false) {
				    $board = "5bdc0927cf837652b9c2e2b1";

				    $url = 'https://api.trello.com/1/cards?name=';
				    $url .= urlencode('@けんじ').$head;


				    $url .='&desc=';



				    $url .= urlencode($fullText);


				    $url .='&idList=';
				    $url .=$board;
				    $due = $duedate;
				    $url .='&pos=top&due=' . $due;
				    $url .='&keepFromSource=all&key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443';


				    $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
				    $ch = curl_init($url);
				    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				    $result = curl_exec($ch);
				    curl_close($ch);




				} 
				if (strpos($event['message']['text'], '@เสี่ยหมี') !== false) {
				    $board = "5bdc073f5622911911691960";

				    $url = 'https://api.trello.com/1/cards?name=';
				    $url .= urlencode('@เสี่ยหมี').$head;


				    $url .='&desc=';



				    $url .= urlencode($fullText);


				    $url .='&idList=';
				    $url .=$board;

				    $due = $duedate;
				    $url .='&pos=top&due=' . $due;
				    $url .='&keepFromSource=all&key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443';


				    $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
				    $ch = curl_init($url);
				    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				    $result = curl_exec($ch);
				    curl_close($ch);


				} 
           
			}	
			
		}
	}
}
echo "OK";
