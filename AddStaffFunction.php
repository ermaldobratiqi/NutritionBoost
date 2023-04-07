<?php

include 'Config.php';

function printStaffCover(){
	global $mysqli;
	$sql = "SELECT img_url,Title,ShortDesc,Author FROM staff";
	$result= $mysqli -> query($sql);

	if ($result -> num_rows > 0){
		while($row = $result -> fetch_assoc()){


			echo '<div class="description" style = "float:left; margin-left: 70px; background-color:lightgreen;">
			<img src="'.$row["img_url"].'" alt="staff" style="width:200px; height:200px">
			<h2 style = "color: black; background-color:lightgreen;">'.$row["Title"].'</h2>
			<p class="textbox" style = "color: black; background-color:lightgreen;">'
			.$row["ShortDesc"].
			'</p>
			
		  </div>';

		}


	}else{
		echo "0 Results";
	}

 }

 ?>