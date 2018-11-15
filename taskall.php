<?php

$url = "https://api.trello.com/1/lists/5be2658aa5b1b615863f6d45/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




			// Make a POST Request to Messaging API to reply to sender
			//$url = 'https://api.trello.com/1/cards?name=phmee&desc=takeashower&idList=5bdc072ae0605e78a05a92c5&keepFromSource=all&key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443';
			//$data = [
			//	'replyToken' => $replyToken,
			//	'messages' => [$messages],
			//];
			//$post = json_encode($data);
			$headers = array('Content-Type: application/json');
			$ch = curl_init($url);
			//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);



			//echo $result . "\r\n";



//echo "<pre>";
//print_r(json_decode($result));
$dataall = json_decode($result);
echo "PM (โปเต้)<br>";
echo "<table border='1'>";
echo "<tr>";
echo "<td>name</td>";
echo "<td>desc</td>";
echo "<td>due</td>";
//echo "<td>dueComplete</td>";
echo "<td>shortUrl</td>";
echo "</tr>";
foreach($dataall as $key => $value){
	//print_r($value);
	//if($value->due == 'true'){
		echo "<tr color='#33FF64'>";
	//}else{
	//	echo "<tr>";	
	//}
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	echo "<td>".date('Y-d-m',strtotime($value->due))."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";





$url = "https://api.trello.com/1/lists/5be26448b284fe18ca0f60e4/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




			// Make a POST Request to Messaging API to reply to sender
			//$url = 'https://api.trello.com/1/cards?name=phmee&desc=takeashower&idList=5bdc072ae0605e78a05a92c5&keepFromSource=all&key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443';
			//$data = [
			//	'replyToken' => $replyToken,
			//	'messages' => [$messages],
			//];
			//$post = json_encode($data);
			$headers = array('Content-Type: application/json');
			$ch = curl_init($url);
			//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);



			//echo $result . "\r\n";



//echo "<pre>";
//print_r(json_decode($result));
$dataall = json_decode($result);
echo "Designer (เพี้ยว)<br>";
echo "<table border='1'>";
echo "<tr>";
echo "<td>name</td>";
echo "<td>desc</td>";
echo "<td>due</td>";
//echo "<td>dueComplete</td>";
echo "<td>shortUrl</td>";
echo "</tr>";
foreach($dataall as $key => $value){
	//print_r($value);
	if($value->dueComplete == 'true'){
		echo "<tr color='#33FF64'>";
	}else{
		echo "<tr>";	
	}
	
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	echo "<td>".date('Y-d-m',strtotime($value->due))."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";








$url = "https://api.trello.com/1/lists/5be26421e7ef14154e8e1719/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




			// Make a POST Request to Messaging API to reply to sender
			//$url = 'https://api.trello.com/1/cards?name=phmee&desc=takeashower&idList=5bdc072ae0605e78a05a92c5&keepFromSource=all&key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443';
			//$data = [
			//	'replyToken' => $replyToken,
			//	'messages' => [$messages],
			//];
			//$post = json_encode($data);
			$headers = array('Content-Type: application/json');
			$ch = curl_init($url);
			//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);



			//echo $result . "\r\n";



//echo "<pre>";
//print_r(json_decode($result));
$dataall = json_decode($result);
echo "IOS (ต้น)<br>";
echo "<table border='1'>";
echo "<tr>";
echo "<td>name</td>";
echo "<td>desc</td>";
echo "<td>due</td>";
//echo "<td>dueComplete</td>";
echo "<td>shortUrl</td>";
echo "</tr>";
foreach($dataall as $key => $value){
	//print_r($value);
	if($value->dueComplete == 'true'){
		echo "<tr color='#33FF64'>";
	}else{
		echo "<tr>";	
	}
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	echo "<td>".date('Y-d-m',strtotime($value->due))."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";




$url = "https://api.trello.com/1/lists/5be2642571a7725bc73d523b/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




			// Make a POST Request to Messaging API to reply to sender
			//$url = 'https://api.trello.com/1/cards?name=phmee&desc=takeashower&idList=5bdc072ae0605e78a05a92c5&keepFromSource=all&key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443';
			//$data = [
			//	'replyToken' => $replyToken,
			//	'messages' => [$messages],
			//];
			//$post = json_encode($data);
			$headers = array('Content-Type: application/json');
			$ch = curl_init($url);
			//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);



			//echo $result . "\r\n";



//echo "<pre>";
//print_r(json_decode($result));
$dataall = json_decode($result);
echo "android (เก่ง)<br>";
echo "<table border='1'>";
echo "<tr>";
echo "<td>name</td>";
echo "<td>desc</td>";
echo "<td>due</td>";
//echo "<td>dueComplete</td>";
echo "<td>shortUrl</td>";
echo "</tr>";
foreach($dataall as $key => $value){
	//print_r($value);
	if($value->dueComplete == 'true'){
		echo "<tr color='#33FF64'>";
	}else{
		echo "<tr>";	
	}
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	echo "<td>".date('Y-d-m',strtotime($value->due))."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";





$url = "https://api.trello.com/1/lists/5be264422464ad09fa4116bf/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




			// Make a POST Request to Messaging API to reply to sender
			//$url = 'https://api.trello.com/1/cards?name=phmee&desc=takeashower&idList=5bdc072ae0605e78a05a92c5&keepFromSource=all&key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443';
			//$data = [
			//	'replyToken' => $replyToken,
			//	'messages' => [$messages],
			//];
			//$post = json_encode($data);
			$headers = array('Content-Type: application/json');
			$ch = curl_init($url);
			//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);



			//echo $result . "\r\n";



//echo "<pre>";
//print_r(json_decode($result));
$dataall = json_decode($result);
echo "CMS (คิง)<br>";
echo "<table border='1'>";
echo "<tr>";
echo "<td>name</td>";
echo "<td>desc</td>";
echo "<td>due</td>";
//echo "<td>dueComplete</td>";
echo "<td>shortUrl</td>";
echo "</tr>";
foreach($dataall as $key => $value){
	//print_r($value);
	if($value->dueComplete == 'true'){
		echo "<tr color='#33FF64'>";
	}else{
		echo "<tr>";	
	}
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	echo "<td>".date('Y-d-m',strtotime($value->due))."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";

?>
