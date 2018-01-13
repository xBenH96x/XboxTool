
		<?php

		include 'dataSource.php';



//var_dump ($apiResultData);die;






				foreach ($apiResultData['activityItems'] as $item) {

					//var_dump ($item);die;

			//print "==========================";
			//print PHP_EOL;

		  //$new_array = ['clipName' => $item['gameMediaContentLocators'][0]['Expiration']];

	$authorInfo = ['authorInfo' => $item['authorInfo']['name']];
  $activityItems = ['activityItems' => $item['downloadUri']['downloadUri']];


	if (!empty($item['downloadUri'])) {





		echo '<table>';
		echo ' <p>Clip Author: ' . $authorInfo['authorInfo'] . '<tr>';
		//echo '<a href="' . ($item['downloadUri']) . '" target="_blank">Clip</a>';
		echo '<video src= "' . $item['downloadUri'] . '" controls></video>';
		echo '</table>';
		echo '   </tr>';

		$date = new DateTime($item['dateRecorded']);


		echo '<div class = "container">';
		echo "Date Recorded: " . $date->format('Y-m-d');
		echo '<div>';

	}
}

?>
