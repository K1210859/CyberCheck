<?php



$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "CyberCheck";

$connection = mysqli_connect($sname, $uname, $password, $db_name);

if ($connection -> connect_errno) {
  echo "Failed to connect to MySQL: " . $connection -> connect_error;
  exit();
}
else {
  echo "You have connected";
}

?>
