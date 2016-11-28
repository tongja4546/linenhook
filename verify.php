<?php
$access_token = 'Y7Rv/42Q+A+eCFUBreXcmBhAvjbjZLwRqeEvRKgofGtGsex4vIk90H1RkItnApqFGrFgKs6jRwP+n6ajsStmLZg04JBXyPtTMxHuTWFNH8dBnVu4P+AOHxbkQRieuV4dN4JdyllR7UgC8HkxvtsgWQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>
