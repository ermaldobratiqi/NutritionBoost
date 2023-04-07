<?php

$DB_SERVER ='127.0.0.1';
$DB_USERNAME='root';
$DB_PASSWORD='';
$DB_NAME='nutritionboost';
 

$mysqli = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
 

if($mysqli === false){
    die("ERROR: Lidhja deshtoj. " . $mysqli->connect_error);
}

?>