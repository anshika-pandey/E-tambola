<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>E-Tambola</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href='signupstyle.css'>
  
</head>
<body>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="./api/user/login.php" method="POST">
        <div class="group">
          <label for="user" class="label">Roll Number</label>
          <input id="username" name="unumber" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="pwd" type="password" class="input" data-type="password">
        </div>
        
        <div class="group">
          <input type="submit" class="button" value="Sign In" formaction="process.php">
        </div>
        <div class="hr"></div>
      </form>
      <form class="sign-up-htm" action="./api/user/signup.php" method="POST">
        <div class="group">
          <label for="user" class="label">Name</label>
          <input id="username" name="uname" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Roll Number</label>
          <input id="username" name="unumber" type="text" class="input" maxlength=9>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="pwd" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass" type="password" name="cnfpwd" class="input" data-type="password">
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up" formaction="signupmanage.php">
        </div>
      </form>

      <?php
if(isset($_SESSION['roll']))
header("Location:test.php");
if(isset($_GET['value']))
{
   
   echo"<script>alert('Password did not match!!');</script>";

    
}


?>
    </div>
  </div>
</div>
  
  
</body>
</html>