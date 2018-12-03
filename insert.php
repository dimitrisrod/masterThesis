<?php
header('Content-Type: text/html; charset=utf-8');
  require('constants.php');
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect(DBHOST,DBUSER,DBPASS,DBSCHEMA);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/* change character set to utf8 */
  if (!$link->set_charset("utf8")) {
      printf("Error loading character set utf8: %s\n", $link->error);
  }

// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_POST['title']);
$descr = mysqli_real_escape_string($link, $_POST['descr']);
$company = mysqli_real_escape_string($link, $_POST['company']);
$model = mysqli_real_escape_string($link, $_POST['model']);
$description = mysqli_real_escape_string($link, $_POST['description']);
$greekmarket = mysqli_real_escape_string($link, $_POST['greekmarket']);
$cost = mysqli_real_escape_string($link, $_POST['cost']);
$power = mysqli_real_escape_string($link, $_POST['power']);
$demands = mysqli_real_escape_string($link, $_POST['demands']);
$economy = mysqli_real_escape_string($link, $_POST['economy']);
$us = mysqli_real_escape_string($link, $_POST['us']);
$website = mysqli_real_escape_string($link, $_POST['website']);
$info = mysqli_real_escape_string($link, $_POST['info']);
$capacity = mysqli_real_escape_string($link, $_POST['capacity']);
$consumption = mysqli_real_escape_string($link, $_POST['consumption']);
$ecoper = mysqli_real_escape_string($link, $_POST['ecoper']);
$energy = mysqli_real_escape_string($link, $_POST['energy']);

// attempt insert query execution
$sql="INSERT INTO products (id,title,descr,company,model,description,greekmarket,cost,power,demands,economy,us,website,info,capacity,consumption,ecoper,energy) VALUES (NULL,'$title', '$descr', '$company','$model','$description','$greekmarket','$cost','$power','$demands','$economy','$us','$website','$info','$capacity','$consumption','$ecoper','$energy')";
if(mysqli_query($link,$sql)){
    echo "Επιτυχημένη Καταγραφή Δεδομένων!\n";
include('export.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
