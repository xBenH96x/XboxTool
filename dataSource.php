<?php

$ch = curl_init ("https://xboxapi.com/v2/2533274839055677/game-clips");

curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-AUTH: e5dd6ea7e64f0ba9ba2b61031a571ac961a6f6e4']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$apiResult = curl_exec($ch);


curl_close($ch);

//var_dump($apiResult);die;



//$apiResultData = json_encode ($apiResult, true);

$apiResultData = json_decode ($apiResult, true);
$cutDownArray = array_slice($apiResultData, 0, 10);


//$sauce = json_encode($apiResultData);

//echo $apiResultData;die;

//var_dump($apiResultData);

//$length = count($apiResultData);

//for ($i=0; $i < $length ; $i++) {

//print_r ($apiResultData[$i]);


//}

//($apiResultData);

 ?>
