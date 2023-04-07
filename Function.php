<?php
session_start();

include('Config.php');

$id=0;
$articleid=0;
$firstname = "";
$lastname    = "";
$email    = "";
$password = "";
$usertype = "";
$errors   = array();
$imgurl = "";
$title = "";
$author = "";
$filename = "";
$shortdesc = "";
$body = "";



if (isset($_POST['button'])) {
	register();
}

if (isset($_POST['Pubishbutton'])) {
	AddArticle();
}
if (isset($_POST['Publishbutton'])) {
	AddTips();
}
if (isset($_POST['Publishbuttonn'])) {
	AddStaff();
}


function register(){

	global $mysqli, $errors, $firstname, $lastname, $email;



	$firstname   =  e($_POST['firstname']);
	$lastname      =  e($_POST['lastname']);
	$email  =  e($_POST['email']);
	$password  =  e($_POST['password']);


	if (empty($firstname)) {
		array_push($errors, "FirstName is required");
	}
	if (empty($lastname)) {
		array_push($errors, "LastName is required");
	}
	if (empty($email)) {
		array_push($errors, "Email is required");
    }
    if (empty($password)) {
		array_push($errors, "Password is required");
	}



	if (count($errors) == 0) {
		$pass = md5($password);

		if (isset($_POST['user_type'])) {

			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (Firstname, Lastname ,Email, Password ,User_type)
					  VALUES('$firstname', '$lastname','$email', '$pass' ,'$user_type')";
			mysqli_query($mysqli, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: Login.php');

		}else{

			$query = "INSERT INTO users (Firstname, Lastname ,Email, Password ,User_type)
					  VALUES('$firstname', '$lastname','$email', '$pass' ,'user')";
			mysqli_query($mysqli, $query);


			$logged_in_user_id = mysqli_insert_id($mysqli);

			$_SESSION['user'] = getUserById($logged_in_user_id);
			$_SESSION['success']  = "You are now logged in";
			header('location: Login.php');
		}
	}
}


function getUserById($id){
	global $mysqli;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($mysqli, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}


function e($val){
	global $mysqli;
	return mysqli_real_escape_string($mysqli, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}



if (isset($_POST['log-button'])) {
	login();
}


function login(){
	global $mysqli, $email, $errors;


	$email = e($_POST['lemail']);
	$password = e($_POST['lpassword']);


	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}


	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE Email='$email' AND Password='$password' LIMIT 1";
		$results = mysqli_query($mysqli, $query);

		if (mysqli_num_rows($results) == 1) {
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['User_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: index.php');
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: index.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}


function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['User_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

function printUsers(){
   global $mysqli;
   $sql = "SELECT Id,Firstname, Lastname ,Email, Password ,User_type FROM users";
   $result= $mysqli -> query($sql);

   if ($result -> num_rows > 0){
       while($row = $result -> fetch_assoc()){
		   echo "<tr><td>" . $row["Firstname"] . "</td><td>" . $row["Lastname"] . "</td><td>" . $row["Email"] . "</td><td>"
			. $row["Password"] . "</td><td>" . $row["User_type"] . "</td><td><a href='AdminManageUsers.php?edit=".$row['Id']."' class='edit-btn'>Edit</a>
			</td><td><a href='Function.php?delete=".$row['Id']."' class='delete-btn'>Delete</a></td></tr>";
	   }
     echo "</table>";
   }else{
	   echo "0 Results";
   }

}


function AddArticle(){

	global $mysqli, $errors, $imgurl, $title, $author, $filename, $shortdesc, $body;



	$imgurl   =  e($_POST['imgurl']);
	$title      =  e($_POST['title']);
	$author  =  e($_POST['author']);
	$filename =  e($_POST['filename']);
	$shortdesc  =  e($_POST['shortdesc']);
	$body  =  e($_POST['body']);



	if (empty($imgurl)) {
		array_push($errors, "FirstName is required");
	}
	if (empty($title)) {
		array_push($errors, "LastName is required");
	}
	if (empty($author)) {
		array_push($errors, "Email is required");
    }
    if (empty($filename)) {
		array_push($errors, "Password is required");
	}
	if (empty($shortdesc)) {
		array_push($errors, "Password is required");
	}
	if (empty($body)) {
		array_push($errors, "Password is required");
	}



	if (count($errors) == 0) {


			$query = "INSERT INTO article (Img_url, Title ,ShortDesc, Body ,FileName,Author)
					  VALUES('$imgurl', '$title','$shortdesc', '$body' ,'$filename','$author')";
			mysqli_query($mysqli, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: diets.php');


	}
}

if(isset($_GET["delete"])){
	$id = $_GET["delete"];
	$mysqli -> query("DELETE FROM users WHERE Id=$id");

	$_SESSION['message']="User Deleted";
	$_SESSION['msg-type']="Delete";

	header("location: AdminManageUsers.php");
}


if(isset($_GET["edit"])){
	$id = $_GET["edit"];
	$result = $mysqli -> query("SELECT Id,Firstname, Lastname ,Email, Password ,User_type FROM users WHERE Id=$id");

    if((is_object($result) && count(get_object_vars($result)) > 0) || count($result)){

	   $row = $result -> fetch_array();
	   $firstname = $row["Firstname"];
	   $lastname = $row["Lastname"];
	   $email = $row["Email"];
	   $password = $row["Password"];
       $usertype = $row["User_type"];
	}




}

if(isset($_POST["update"])){
	$id = $_POST["id"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$usertype = $_POST["user_type"];

	$result = $mysqli -> query("UPDATE users SET Firstname='$firstname',Lastname='$lastname',Email='$email',Password='$password',User_type='$usertype'  WHERE Id=$id");

    $_SESSION['message']="User Edited";
	$_SESSION['msg-type']="Edit";




}



function printArticles(){
	global $mysqli;
	$sql = "SELECT Article_Id,Title, FileName ,Author FROM article";
	$result= $mysqli -> query($sql);

	if ($result -> num_rows > 0){
		while($row = $result -> fetch_assoc()){
			echo "<tr><td>" . $row["Title"] . "</td><td>" . $row["FileName"] . "</td><td>" . $row["Author"] . "</td><td><a href='AdminManageArticles.php?edita=".$row['Article_Id']."' class='edit-btn'>Edit</a>
			 </td><td><a href='Function.php?deletea=".$row['Article_Id']."' class='delete-btn'>Delete</a></td></tr>";
		}
	  echo "</table>";
	}else{
		echo "0 Results";
	}

 }

 if(isset($_GET["deletea"])){
	$id = $_GET["deletea"];
	$mysqli -> query("DELETE FROM article WHERE Article_Id=$id");

	$_SESSION['message']="User Deleted";
	$_SESSION['msg-type']="Delete";

	header("location: AdminManageArticles.php");
}



if(isset($_GET["edita"])){
	$id = $_GET["edita"];
	$result = $mysqli -> query("SELECT Article_Id,Img_url,Title,ShortDesc,Body,FileName,Author FROM article WHERE Article_Id=$id");

    if((is_object($result) && count(get_object_vars($result)) > 0) || count($result)){

	   $row = $result -> fetch_array();
	   $imgurl = $row["Img_url"];
	   $title = $row["Title"];
	   $filename = $row["FileName"];
	   $author = $row["Author"];
	   $shortdesc = $row["ShortDesc"];
	   $body = $row["Body"];
	}

}


if(isset($_POST["Updatebutton"])){
	$articleid = $_POST["articleid"];
	$imgurl = $_POST["imgurl"];
	$title = $_POST["title"];
	$author = $_POST["author"];
	$filename = $_POST["filename"];
	$shortdesc = $_POST["shortdesc"];
	$body = $_POST["body"];

	$result = $mysqli -> query("UPDATE article SET  Img_url ='$imgurl',Title='$title',ShortDesc='$shortdesc',Body='$body',FileName='$filename',Author='$author'  WHERE Article_Id=$id");

	$_SESSION['message']="User Edited";
	$_SESSION['msg-type']="Edit";




}

function AddTips(){

	global $mysqli, $errors, $imgurl, $title, $author;



	$imgurl   =  e($_POST['imgurl']);
	$title      =  e($_POST['title']);
	$author  =  e($_POST['author']);
;



	if (empty($imgurl)) {
		array_push($errors, "FirstName is required");
	}
	if (empty($title)) {
		array_push($errors, "LastName is required");
	}
	if (empty($author)) {
		array_push($errors, "Email is required");
    }




	if (count($errors) == 0) {


			$query = "INSERT INTO tips (Img_url, Title , Author)
					  VALUES('$imgurl', '$title','$author')";
			mysqli_query($mysqli, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: tips.php');


	}
}

if(isset($_GET["delete"])){
	$id = $_GET["delete"];
	$mysqli -> query("DELETE FROM users WHERE Id=$id");

	$_SESSION['message']="User Deleted";
	$_SESSION['msg-type']="Delete";

	header("location: AdminManageTips.php");
}


if(isset($_GET["edit"])){
	$id = $_GET["edit"];
	$result = $mysqli -> query("SELECT Id,Firstname, Lastname ,Email, Password ,User_type FROM users WHERE Id=$id");

    if((is_object($result) && count(get_object_vars($result)) > 0) || count($result)){

	   $row = $result -> fetch_array();
	   $firstname = $row["Firstname"];
	   $lastname = $row["Lastname"];
	   $email = $row["Email"];
	   $password = $row["Password"];
       $usertype = $row["User_type"];
	}




}

if(isset($_POST["update"])){
	$id = $_POST["id"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$usertype = $_POST["user_type"];

	$result = $mysqli -> query("UPDATE users SET Firstname='$firstname',Lastname='$lastname',Email='$email',Password='$password',User_type='$usertype'  WHERE Id=$id");

    $_SESSION['message']="User Edited";
	$_SESSION['msg-type']="Edit";




}



function printTips(){
	global $mysqli;
	$sql = "SELECT id, Title, Author FROM tips";
	$result= $mysqli -> query($sql);

	if ($result -> num_rows > 0){
		while($row = $result -> fetch_assoc()){
			echo "<tr><td>" . $row["Title"] . "</td><td>" . $row["Author"] . "</td><td><a href='AdminManageTips.php?editt=".$row['id']."' class='edit-btn'>Edit</a>
			 </td><td><a href='Function.php?deletet=".$row['id']."' class='delete-btn'>Delete</a></td></tr>";
		}
	  echo "</table>";
	}else{
		echo "0 Results";
	}

 }

 if(isset($_GET["deletet"])){
	$id = $_GET["deletet"];
	$mysqli -> query("DELETE FROM tips WHERE id=$id");

	$_SESSION['message']="User Deleted";
	$_SESSION['msg-type']="Delete";

	header("location: AdminManageTips.php");
}



if(isset($_GET["editt"])){
	$id = $_GET["editt"];
	$result = $mysqli -> query("SELECT id, img_url,Title,Author FROM tips WHERE id=$id");

    if((is_object($result) && count(get_object_vars($result)) > 0) || count($result)){

	   $row = $result -> fetch_array();
	   $imgurl = $row["img_url"];
	   $title = $row["Title"];
	   $author = $row["Author"];
	
	}

}


if(isset($_POST["Updatebuttonn"])){
	$id = $_POST["id"];
	$imgurl = $_POST["imgurl"];
	$title = $_POST["title"];
	$author = $_POST["author"];

	$result = $mysqli -> query("UPDATE tips SET  img_url ='$imgurl',Title='$title',Author='$author'  WHERE id=$id");

	$_SESSION['message']="User Edited";
	$_SESSION['msg-type']="Edit";


}

function printComments(){
	global $mysqli;
	$sql = "SELECT id, firstname, lastname, email, comments FROM tblcontact";
	$result= $mysqli -> query($sql);

	if ($result -> num_rows > 0){
		while($row = $result -> fetch_assoc()){
			echo "<tr><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["comments"] . "</td><td><a href='Function.php?deletet=".$row['id']."' class='delete-btn'>Delete</a></td></tr>";
		}
	  echo "</table>";
	}else{
		echo "0 Results";
	}

 }

 if(isset($_GET["deletet"])){
	$id = $_GET["deletet"];
	$mysqli -> query("DELETE FROM tblcontact WHERE id=$id");

	$_SESSION['message']="User Deleted";
	$_SESSION['msg-type']="Delete";

	header("location: ManageComments.php");
}

function AddStaff(){

	global $mysqli, $errors, $imgurl, $title, $shortdesc, $author;



	$imgurl   =  e($_POST['imgurl']);
	$title      =  e($_POST['title']);
	$shortdesc  =  e($_POST['shortdesc']);
	$author  =  e($_POST['author']);




	if (empty($imgurl)) {
		array_push($errors, "FirstName is required");
	}
	if (empty($title)) {
		array_push($errors, "LastName is required");
	}
	if (empty($shortdesc)) {
		array_push($errors, "Password is required");
	}
	if (empty($author)) {
		array_push($errors, "Password is required");
	}



	if (count($errors) == 0) {


			$query = "INSERT INTO staff (img_url, Title ,ShortDesc, Author)
					  VALUES('$imgurl', '$title','$shortdesc','$author')";
			mysqli_query($mysqli, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: AboutUs.php');


	}
}

if(isset($_GET["delete"])){
	$id = $_GET["delete"];
	$mysqli -> query("DELETE FROM users WHERE Id=$id");

	$_SESSION['message']="User Deleted";
	$_SESSION['msg-type']="Delete";

	header("location: AdminManageUsers.php");
}


if(isset($_GET["edit"])){
	$id = $_GET["edit"];
	$result = $mysqli -> query("SELECT Id,Firstname, Lastname ,Email, Password ,User_type FROM users WHERE Id=$id");

    if((is_object($result) && count(get_object_vars($result)) > 0) || count($result)){

	   $row = $result -> fetch_array();
	   $firstname = $row["Firstname"];
	   $lastname = $row["Lastname"];
	   $email = $row["Email"];
	   $password = $row["Password"];
       $usertype = $row["User_type"];
	}




}

if(isset($_POST["update"])){
	$id = $_POST["id"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$usertype = $_POST["user_type"];

	$result = $mysqli -> query("UPDATE users SET Firstname='$firstname',Lastname='$lastname',Email='$email',Password='$password',User_type='$usertype'  WHERE Id=$id");

    $_SESSION['message']="User Edited";
	$_SESSION['msg-type']="Edit";




}



function printStaff(){
	global $mysqli;
	$sql = "SELECT id,img_url,Title,ShortDesc,Author FROM staff";
	$result= $mysqli -> query($sql);

	if ($result -> num_rows > 0){
		while($row = $result -> fetch_assoc()){
			echo "<tr><td>" . $row["img_url"] . "</td><td>" . $row["Title"] . "</td><td>" . $row["ShortDesc"] . "</td><td>" . $row["Author"] . "</td><td><a href='Function.php?deletes=".$row['id']."' class='delete-btn'>Delete</a></td></tr>";
		}
	  echo "</table>";
	}else{
		echo "0 Results";
	}

 }

 if(isset($_GET["deletes"])){
	$id = $_GET["deletes"];
	$mysqli -> query("DELETE FROM staff WHERE id=$id");

	$_SESSION['message']="User Deleted";
	$_SESSION['msg-type']="Delete";

	header("location: AdminManageStaff.php");
}


















