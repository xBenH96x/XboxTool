<?php

$ch = curl_init ("https://xboxapi.com/v2/2533274839055677/game-clips");

curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-AUTH: HIDDEN']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$apiResult = curl_exec($ch);


curl_close($ch);

$apiResultData = json_decode($apiResult, true);

$data = array_slice($apiResultData, 0, 20);

echo json_encode($data, true);





//echo '<pre>';
//print_r($apiResult);die;
//echo '</pre>';
//$apiResultData = $apiResult;
//$apiResultData = json_decode ($apiResult, true);

//$serializedTest = serialize($apiResultData);

//$apiResultData = json_decode($apiResult, true);
//$cutDownArray = array_slice($apiResultData, 0, 10);
//$secondCutDown = array_slice($apiResultData, 10, 10);

//print_r($secondCutDown);die;

//$sauce = json_encode($apiResultData);

//echo $apiResultData;die;

//var_dump($apiResultData);

//$length = count($apiResultData);

//for ($i=0; $i < $length ; $i++) {

//print_r ($apiResultData[$i]);


//}

//($apiResultData);

 ?>
