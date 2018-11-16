<?php

/*
"id": "5bee843c8788167f2e52f516",
    "name": "PM",
    
"id": "5bee84408a10ca10ce4ceaa0",
    "name": "DESIGN",
    
id": "5bee84500592f013bb62b0b9",
    "name": "FrontEnd",
5bee84510c501365fc33e239",
    "name": "Programming
    
"id": "5bee8458b952f719343aae26",
    "name": "IOS",
    
 "id": "5bee845abafecb5e7a0538b2",
    "name": "Android",
*/
$url = "https://api.trello.com/1/lists/5bee843c8788167f2e52f516/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




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
//echo "PM (โปเต้)<br>";
echo "<table border='1'>";
echo "<tr>";
echo "<td width='100'>resource</td>";
echo "<td width='100'>due</td>";
echo "<td>name</td>";
echo "<td>desc</td>";
//echo "<td>dueComplete</td>";
echo "<td>shortUrl</td>";
echo "</tr>";
foreach($dataall as $key => $value){
	//print_r($value);
	
	if($value->dueComplete == 'true'){
		echo "<tr bgcolor='#33FF64'>";
	}else{
		echo "<tr>";	
	}
	echo "<td>PM (พี่ปอ)</td>";
	echo "<td>".date('Y-M-d',strtotime($value->due))."</td>";
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";





$url = "https://api.trello.com/1/lists/5bee84408a10ca10ce4ceaa0/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




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
//echo "Designer (เพี้ยว)<br>";
echo "<table border='1'>";
echo "<tr>";
echo "<td width='100'>resource</td>";
echo "<td width='100'>due</td>";
echo "<td>name</td>";
echo "<td>desc</td>";
//echo "<td>dueComplete</td>";
echo "<td>shortUrl</td>";
echo "</tr>";
foreach($dataall as $key => $value){
	//print_r($value);
	
	if($value->dueComplete == 'true'){
		echo "<tr bgcolor='#33FF64'>";
	}else{
		echo "<tr>";	
	}
	echo "<td>Designer </td>";
	echo "<td>".date('Y-M-d',strtotime($value->due))."</td>";
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";











$url = "https://api.trello.com/1/lists/5bee84500592f013bb62b0b9/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




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
//echo "IOS (ต้น)<br>";
echo "<table border='1'>";
echo "<tr>";
echo "<td width='100'>resource</td>";
echo "<td width='100'>due</td>";
echo "<td>name</td>";
echo "<td>desc</td>";
//echo "<td>dueComplete</td>";
echo "<td>shortUrl</td>";
echo "</tr>";
foreach($dataall as $key => $value){
	//print_r($value);
	
	if($value->dueComplete == 'true'){
		echo "<tr bgcolor='#33FF64'>";
	}else{
		echo "<tr>";	
	}
	echo "<td>FrontEnd (พี่แซม)</td>";
	echo "<td>".date('Y-M-d',strtotime($value->due))."</td>";
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";











$url = "https://api.trello.com/1/lists/5bee8458b952f719343aae26/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




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
//echo "IOS (ต้น)<br>";
echo "<table border='1'>";
echo "<tr>";
echo "<td width='100'>resource</td>";
echo "<td width='100'>due</td>";
echo "<td>name</td>";
echo "<td>desc</td>";
//echo "<td>dueComplete</td>";
echo "<td>shortUrl</td>";
echo "</tr>";
foreach($dataall as $key => $value){
	//print_r($value);
	
	if($value->dueComplete == 'true'){
		echo "<tr bgcolor='#33FF64'>";
	}else{
		echo "<tr>";	
	}
	echo "<td>IOS </td>";
	echo "<td>".date('Y-M-d',strtotime($value->due))."</td>";
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";




$url = "https://api.trello.com/1/lists/5bee845abafecb5e7a0538b2/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




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
//echo "android (เก่ง)<br>";
echo "<table border='1'>";
echo "<tr>";
echo "<td width='100'>resource</td>";
echo "<td width='100'>due</td>";
echo "<td>name</td>";
echo "<td>desc</td>";
//echo "<td>dueComplete</td>";
echo "<td>shortUrl</td>";
echo "</tr>";
foreach($dataall as $key => $value){
	//print_r($value);
	
	if($value->dueComplete == 'true'){
		echo "<tr bgcolor='#33FF64'>";
	}else{
		echo "<tr>";	
	}
	echo "<td>android (เก่ง)</td>";
	echo "<td>".date('Y-M-d',strtotime($value->due))."</td>";
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";





$url = "https://api.trello.com/1/lists/5bee84510c501365fc33e239/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




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
//echo "CMS (คิง)<br>";
echo "<table border='1'>";
echo "<tr>";
echo "<td width='100'>resource</td>";
echo "<td width='100'>due</td>";
echo "<td>name</td>";
echo "<td>desc</td>";
//echo "<td>dueComplete</td>";
echo "<td>shortUrl</td>";
echo "</tr>";
foreach($dataall as $key => $value){
	//print_r($value);
	
	if($value->dueComplete == 'true'){
		echo "<tr bgcolor='#33FF64'>";
	}else{
		echo "<tr>";	
	}
	echo "<td>Programming (พี่โอเล่)</td>";
	echo "<td>".date('Y-M-d',strtotime($value->due))."</td>";
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";

?>
