<?php
//header("Content-Type: image/jpeg");

$access_token = '/rx52zV39CbiEnDSoo7/V1P+qd+iS1TI2w7mCMpAvSmTaeRXb32vbptmmWoiNQvvQfPG3W6xkDneCqv2YAzRyUeBzZROnNdgspO6XULmWO1ZGURnWLB9Gvjj6IQf/waChd+PoS0m1mf+uQmviaGWpgdB04t89/1O/w1cDnyilFU=';



$url = 'https://api.line.me/v2/bot/message/8843347535283/content';
//

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
$path = date('d_h_i_s').'.jpg';

file_put_contents($path, $result);
//echo $path;

?>
<?php

$cfile = curl_file_create($path,'image/jpg','file');
        $data = array(
            'section' => 'save',
            'field1' => 'example1',
            'field2' => '20171022',
            'file' => $cfile
        );
$url = 'https://api.trello.com/1/cards/5be6ea2338cc804e19b8f71b/attachments?key=de2dc6ea5b95210c5f7ab253415725f7&token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443';

# init curl
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $encoded_fields);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLINFO_HEADER_OUT, TRUE); // make sure we see the sended header afterwards
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
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

/*
$access_token = '/rx52zV39CbiEnDSoo7/V1P+qd+iS1TI2w7mCMpAvSmTaeRXb32vbptmmWoiNQvvQfPG3W6xkDneCqv2YAzRyUeBzZROnNdgspO6XULmWO1ZGURnWLB9Gvjj6IQf/waChd+PoS0m1mf+uQmviaGWpgdB04t89/1O/w1cDnyilFU=';

$userId = 'U98ff4f3d94c11a90902cb1a41d0c0388';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

*/
?>
