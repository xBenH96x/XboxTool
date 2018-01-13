<?php

// Read this:
// http://php.net/manual/en/curl.examples-basic.php
//Test Change
//Second Test
//Third Test
// And this:
// https://xboxapi.com/documentation

$ch = curl_init("https://xboxapi.com/v2/2533274839055677/activity");

curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-AUTH: f78386012340550694828c7c081d6cf302791bd7']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$apiResult = curl_exec($ch);
// This will print the string of text received from the API:
//print $apiResult;

curl_close($ch);

$apiResultData = json_decode ($apiResult, true);

//This will print the decoded data structure:
//print_r ('<pre>');
//print_r ($apiResultData);
//print_r ('</pre>');

//print "We have this many items: ";
//print count($apiResultData['activityItems']);
///print PHP_EOL;
///print PHP_EOL;
//print PHP_EOL;
