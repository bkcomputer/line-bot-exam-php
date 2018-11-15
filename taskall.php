<?php

$url = "https://api.trello.com/1/lists/5be2658aa5b1b615863f6d45/cards?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443"
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
			echo 'This is request = '.$request .'<br />';
			echo 'This is error = '.$error .'<br />';

?>
