<?php
$urlEndPoint = "https://reqres.in/api/users/140";

$ch = curl_init();

$aData = [
    'name' => 'jahir',
    'job' => 'Php developer',
];

$data = http_build_query($aData);

curl_setopt($ch, CURLOPT_URL, $urlEndPoint);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) echo curl_error($ch);

echo $response;
curl_close($ch);
