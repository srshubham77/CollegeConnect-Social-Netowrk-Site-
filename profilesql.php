<?php

$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con, "collegenetworking");

$profilerec = mysqli_query($con, "SELECT * FROM stuacc WHERE email ='$_SESSION[logid]'");

while($row = mysqli_fetch_array($profilerec, MYSQLI_ASSOC))
  {
$usid  = $row["id"];
$fname = $row["firstname"];
$lname = $row["lastname"];
$gend = $row["iam"];
  }
  $_SESSION["iduser"] = $usid;
$profilerec = mysqli_query($con, "SELECT * FROM profile WHERE userid ='$usid' ");

while($row = mysqli_fetch_array($profilerec, MYSQLI_ASSOC))
  {

$relationship= $row["relstat"]; 	
$city = $row["city"]; 	
$state = $row["state"]; 	
$pincode = $row["pincode"]; 	
$country = $row["country"]; 	
$usimg = $row["image"];
$hschool = $row["hschool"]; 	
$college = $row["coluni"]; 	
$course= $row["course"];
  }
?>