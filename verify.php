<?php
$access_token = '1Ri88DgUgyogY1+e/c+fmWU4ljK/5ep7/+xHmUs+iDKgNJCcj5ulIOWVHCPESJfdB2iiRlA1Wm+okMaa0YY/d7mrYjx1fdITeCOEnXCdEEs/RodJjbdNzha1xfvNq21pAn5FHH0aC4JfCz5bOfHrcwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
