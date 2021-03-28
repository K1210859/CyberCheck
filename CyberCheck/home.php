<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username']))
{


 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>HOME</title>
   <link rel="stylesheet" type="text/css" href="mystyle.css" />
 </head>
 <body>
   <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
   <a href="logout.php"> Logout</a>
   <div class="navigation">
     <p>
       <a href="home.html">Home Page</a>
     </p>
   </div>
 </body>
 </html>

 <?php
} else{
  header("Location: index.php");
  exit();
}
  ?>
