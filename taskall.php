<?php

$url = "https://api.trello.com/1/lists/5bdc072ae0605e78a05a92c5/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




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
echo "<td>resource</td>";
echo "<td width='150'>due</td>";
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
	echo "<td>PM (ปุ๊กปิ๊ก)</td>";
	echo "<td>".date('Y-M-d',strtotime($value->due))."</td>";
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";





$url = "https://api.trello.com/1/lists/5bdc0ae66e82f44f8dc9506b/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




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
echo "<td>resource</td>";
echo "<td width='150'>due</td>";
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
	echo "<td>Designer (เพี้ยว)</td>";
	echo "<td>".date('Y-M-d',strtotime($value->due))."</td>";
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";








$url = "https://api.trello.com/1/lists/5bdc0730f8bb4e8b70992f25/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




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
echo "<td>resource</td>";
echo "<td width='150'>due</td>";
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
	echo "<td>IOS (น๊อต)</td>";
	echo "<td>".date('Y-M-d',strtotime($value->due))."</td>";
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";




$url = "https://api.trello.com/1/lists/5bdc0927cf837652b9c2e2b1/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




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
echo "<td>resource</td>";
echo "<td width='150'>due</td>";
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
	echo "<td>android (เคนจิ)</td>";
	echo "<td>".date('Y-M-d',strtotime($value->due))."</td>";
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";





$url = "https://api.trello.com/1/lists/5bdc073f5622911911691960/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";
			




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
echo "<td>resource</td>";
echo "<td width='150'>due</td>";
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
	echo "<td>CMS (พี่โอเล่)</td>";
	echo "<td>".date('Y-M-d',strtotime($value->due))."</td>";
	echo "<td>".$value->name."</td>";
	echo "<td>".$value->desc."</td>";
	//echo "<td>".$value->dueComplete."</td>";
	echo "<td>".$value->shortUrl."</td>";
	echo "</tr>";
}
echo "</table><hr>";

?>
