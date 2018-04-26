<?php

$ch = curl_init("https://xboxapi.com/v2/2533274839055677/activity");

curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-AUTH: f78386012340550694828c7c081d6cf302791bd7']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$apiResult = curl_exec($ch);


curl_close($ch);

$apiResultData = json_decode ($apiResult, true);

