<?php include $_SERVER['DOCUMENT_ROOT'] . "/dataSource.php" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="test.css">
  <body {background-color: blue;}>
  <title>My Xbox One Clips!</title>
  </head>

<?php

foreach ($cutDownArray as $i => $row) {

//var_dump($row);die;

  $clipURLS = $row['gameClipUris'][0]['uri'];
  $titleName = $row['titleName'];
  $datePublished = new DateTime($row['datePublished']);
  $deviceType = $row['deviceType'];

?>
  <body>

    <?php
    echo '<div class ="container">';

    echo '<p>Title Name: ' . $titleName .  '<tr>';

    echo '<p>Date Published: ' . $datePublished->format('d-m-Y') .  '<tr>';

    echo '<p>Device Type: ' .  $deviceType .  '<tr>';

    echo '</div>';

    echo '<div class ="container">';

    echo '<video width="900" height="400" controls

    video src= "' . $clipURLS . '" controls></video>';

    echo '</div>';
}?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script

  </body>
  </html>
