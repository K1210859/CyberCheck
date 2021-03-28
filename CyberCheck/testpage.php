<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "Social_Media";

$connection = mysqli_connect($sname, $uname, $password, $db_name);

if(!$connection)
{
  echo "Connection failed!"
    die("Connection failed: " . mysqli_connect_error());
}
else {
  echo "You have connected";
}

?>

$con = new mysqli("localhost","root","","animes");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
else
{
    $sqli = "SELECT * FROM highestrated;";
    $result = mysqli_query($con,$sqli);
    $resultCheck = mysqli_num_rows($result);
    $count=0;
    $limit=5;
    if($resultCheck>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
        echo $row['Title'];
        }
    }
}
