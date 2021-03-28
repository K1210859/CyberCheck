<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>CyberCheck</title>
  <link rel="stylesheet" href="mystyle.css">
</head>
<body>
  <h1>CyberCheck</h1>
  <br>
  <h2>Make sure to create a new account if this is your first time using this web application. If you have already signed up with an account, use your account information to log in.</h2>
  <hr>
  <h3>Log-in Area</h3>
  <form action="login.php" method="post">
    
    <div class="container">
      <?php if(isset($_GET['error'])) {
        ?><p class="error">
          <?php echo $_GET['error']; ?>
        </p>
      <?php }?>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Username" name="uname" required>
<br>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Password" name="password" required>
<br>
      <button type="submit">Login</button>
      <a href="signup.php" class="ca">Create an account</a>

      <button type="button" class="cancelbtn">Cancel</button>
    </div>

  </form>
<br>
<hr>

</body>

</html>
