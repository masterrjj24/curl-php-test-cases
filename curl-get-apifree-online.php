<?php
$urlEndPoint = "https://reqres.in/api/users/2";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $urlEndPoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) echo curl_error($ch);

echo $response;
curl_close($ch);
