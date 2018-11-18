<?
$tracking_number = '120084323170';
$sql = "EXECUTE [dbo].[functionSearchTrackingHistory] @tracking_number = N'$tracking_number'";

$post_field = 'sql='.$sql;
$url = 'http://c2.scgexpress.co.th/dbhelper/query';

$options = array(
	CURLOPT_URL => $url
	,CURLOPT_HEADER => false
	,CURLOPT_POST => 1
	,CURLOPT_POSTFIELDS => $post_field
	,CURLOPT_RETURNTRANSFER => true
);

$curl = curl_init();
curl_setopt_array($curl, $options);
$curResult = curl_exec($curl);

echo $curResult;
?>
