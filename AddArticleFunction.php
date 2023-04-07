<?php

include 'Config.php';

function printArticlesCover(){
	global $mysqli;
	$sql = "SELECT Img_url,Title,ShortDesc,FileName,Author,Date_Created FROM article";
	$result= $mysqli -> query($sql);

	if ($result -> num_rows > 0){
		while($row = $result -> fetch_assoc()){


			echo '<div class="description" style = "margin-left: 60px;">
			<img src="'.$row["Img_url"].'" alt="food" style="width:100%">
			<h2>'.$row["Title"].'</h2>
			<p class="textbox">'
			.$row["ShortDesc"].
			'</p>
			
		  </div>';

		}


	}else{
		echo "0 Results";
	}

 }


 ?>
