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


 $cfile = curl_file_create('$path','image/jpg','image_field');
        $data = array(
            'section' => 'save',
            'field1' => 'example1',
            'field2' => '20171022',
            'file' => '@'.$cfile
        );

//curl -v -F token={45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443} -F file=@test.pdf https://api.trello.com/1/cards/5be6ea2338cc804e19b8f71b/attachments\?key\={de2dc6ea5b95210c5f7ab253415725f7}\&token\={45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443}
//curl -v -F token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443 -F file=@11_04_40_38.jpg https://api.trello.com/1/cards/5be6ea2338cc804e19b8f71b/attachments\?key\=de2dc6ea5b95210c5f7ab253415725f7\&token\=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443



//curl -v -F token=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443 -F file=@11_04_40_38.jpg https://api.trello.com/1/cards/5be6ea2338cc804e19b8f71b/attachments\?key\=de2dc6ea5b95210c5f7ab253415725f7\&token\=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443
        $target="https://api.trello.com/1/cards/5be6ea2338cc804e19b8f71b/attachments\?key\=de2dc6ea5b95210c5f7ab253415725f7\&token\=45abc962c53562b0610b6bcf1236ec645dfe9b1f01994469bd591393a1a23443";

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $target);
        curl_setopt($curl, CURLOPT_USERAGENT,'Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.15');
        curl_setopt($curl, CURLOPT_HTTPHEADER,array('User-Agent: Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.15','Referer: http://someaddress.tld','Content-Type: multipart/form-data'));
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // stop verifying certificate
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($curl, CURLOPT_COOKIEFILE, '/tmp/'.$cookie_file);
        curl_setopt($curl, CURLOPT_POST, true); // enable posting
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // post images 
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); // if any redirection after upload
        $r = curl_exec($curl); 
        curl_close($curl);
echo print_r($r);

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
