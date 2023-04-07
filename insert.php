<?php 
require_once("Config.php");
if((isset($_POST['firstname'])&& $_POST['firstname'] !='') && (isset($_POST['email'])&& $_POST['email'] !=''))
{
 require_once("ContactForm.php");


$firstName = $mysqli->real_escape_string($_POST['firstname']);
$lastName = $mysqli->real_escape_string($_POST['lastname']);
$email = $mysqli->real_escape_string($_POST['email']);
$comments = $mysqli->real_escape_string($_POST['comments']);
  //query to insert the variable data into the database
  $sql ="INSERT INTO tblcontact (firstname, lastname, email, comments) VALUES ('".$firstName."', '".$lastName."', '".$email."', '".$comments."')";
  //Execute the query and returning a message

  
  if(!$result = $mysqli->query($sql)){
    die('There was an error running the query [' . $mysqli->error . ']');
    }
    else
    {
    echo "Thank you! We will contact you soon";
    }
    }
    else
    {
    echo "Please fill Name and Email";
    }
    
?>