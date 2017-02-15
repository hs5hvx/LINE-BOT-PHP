<?php
$proxy = 'bH0TVlyfy7Fkukv@velodrome.usefixie.com:80';
$proxyauth = 'admin@cpd.co.th:spinach131009';
$access_token = '8kvhbT+UtyyXRqKGB5VcZTEtMTfkKfp5C5cJ2Jt6CrkvFRmO8VF1FszSk4dtuCz3DNXlZGN2DybS1QmfLNElYkzTHNJwehhV0wTlCInU9II+vcmec4Q7b7YyifrBqHNrxHGhHTPtpZGaDkGTHxg/IwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
