<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>CyberCheck</title>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
  <h1>CyberCheck</h1>
  <br>
  <h2>Make sure to create a new account if this is your first time using this web application. If you have already signed up with an account, use your account information to log in.</h2>
  <hr>
  <h3>Sign up</h3>
  <form action="signup-check.php" method="post">

    <div class="container">
      <?php if(isset($_GET['error'])) {
        ?><p class="error">
          <?php echo $_GET['error']; ?>
        </p>
      <?php }?>

      <?php if(isset($_GET['success'])) {
        ?><p class="success">
          <?php echo $_GET['success']; ?>
        </p>
      <?php }?>

      <label>Name</label>
      <?php if(isset($_GET['name'])) {
        ?> <input type="text"
                  name="name"
                  placeholder="Name"
                  value="<?php echo $_GET['name']; ?>"><br>

      <?php }else{ ?>
        <input type="text" placeholder="Name" name="name" required>
  <br>
      <?php }?>

      <label>Username</label>
      <?php if(isset($_GET['uname'])) {
        ?> <input type="text"
                  name="uname"
                  placeholder="Username"
                  value="<?php echo $_GET['uname']; ?>"><br>

      <?php }else{ ?>
        <input type="text" placeholder="Username" name="uname" required>
  <br>
      <?php }?>




      <label>Password</label>
      <input type="password"
              placeholder="Password"
              name="password" required>
<br>

      <label>Re Password</label>
      <input type="password"
              placeholder="Re_Password"
              name="re_password" required>
<br>

      <button type="submit">Login</button>
      <a href="index.php" class="ca">Already have an account?</a>

    </div>

  </form>
<br>

</body>

</html>
