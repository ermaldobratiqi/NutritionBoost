<?php

include 'Config.php';

function printTipsCover(){
	global $mysqli;
	$sql = "SELECT Img_url,Title,Author,Date_Created FROM tips";
	$result= $mysqli -> query($sql);

	if ($result -> num_rows > 0){
		while($row = $result -> fetch_assoc()){


			echo '
			<h2 style="text-align: center;">'.$row["Title"].'</h2>
			<img src="'.$row["Img_url"].'" alt="food" style="width:49%; ">'
			;

		}


	}else{
		echo "0 Results";
	}

 }






 ?>
