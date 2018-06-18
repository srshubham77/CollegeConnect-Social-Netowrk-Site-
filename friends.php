<?php
session_start();

$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con, "collegenetworking");

include("profilesql.php");
$result = mysqli_query($con, "SELECT * FROM addfriends where meid='$_SESSION[stuid]' ");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
  $uid1[$i] = $row["friendid"];
  $i++;
  }

 $acrec1 = mysqli_query($con, "SELECT * FROM addfriends WHERE userid='$uid1[1]'");

while($row = mysqli_fetch_array($acrec2, MYSQLI_ASSOC))
  {
	$img1[0]=  $row["image"];
  }
  
  $acrec2 = mysqli_query($con, "SELECT * FROM addfriends WHERE userid='$uid1[2]'");

while($row = mysqli_fetch_array($acrec2, MYSQLI_ASSOC))
  {
	$img1[1]=  $row["image"];
  }
  
  $acrec3 = mysqli_query($con, "SELECT * FROM profile WHERE userid='$uid1[3]' ");

while($row = mysqli_fetch_array($acrec3, MYSQLI_ASSOC))
  {
	$img1[2]=  $row["image"];
  }
  
  $acrec4 = mysqli_query($con, "SELECT * FROM profile WHERE userid='$uid1[4]' ");
while($row = mysqli_fetch_array($acrec4, MYSQLI_ASSOC))
  {
	$img1[3]=  $row["image"];
  }
  ?>