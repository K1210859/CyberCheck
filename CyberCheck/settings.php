<?php
session_start();
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "CyberCheck";

$connection = mysqli_connect($sname, $uname, $password, $db_name);

if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$CurrentUsername = mysqli_real_escape_string($connection, $_REQUEST['CurrentUsername']);

$CurrentPassword = mysqli_real_escape_string($connection, $_REQUEST['CurrentPassword']);

$NewUsername =  mysqli_real_escape_string($connection, $_REQUEST['NewUsername']);

$NewPassword =  mysqli_real_escape_string($connection, $_REQUEST['NewPassword']);


$sqli = "SELECT * FROM users;";
$result = mysqli_query($connection,$sqli);
$resultCheck = mysqli_num_rows($result);
$verify = false;
if($resultCheck>0)
{
  while($row = mysqli_fetch_assoc($result))
  {

      if($row['username'] == $CurrentUsername and $row['password'] == $CurrentPassword)
      {
          $verify = true;
      }
  }
  if($verify==true)
  {
    $sqlchangeUsername = mysqli_query($connection, "UPDATE users SET username='$NewUsername' WHERE username='$CurrentUsername'");
    $sqlchangePassword = mysqli_query($connection, "UPDATE users SET password='$NewPassword' WHERE password='$CurrentPassword'");
    echo "You have successfully changed your account information!";
  }
  else
  {
    echo "This is the incorrect current username or password!";
  }
}

?>
