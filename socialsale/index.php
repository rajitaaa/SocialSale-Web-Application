<?php
include_once('phplib/controler.php');
?>    

<!DOCTYPE html>
    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>SocialSale - intra-college e-market and mentoring</title>
      
      
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
          <link rel="stylesheet" href="css/loginpage.css">
        <style>
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("img/bg-img/login.png");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
      
    </head>
    <body>
     <div class="bg">
      <div class="login-wrap">
      <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
            
             <?php
				  if(isset($_POST['login']))
				  {
				  	checklogin($_POST['username'],$_POST['password']);
				  }
				  ?>
            
            
          <form class="sign-in-htm" action="index.php" method="post">
            <div class="group">
              <label for="user" class="label">Username</label>
              <input id="username" name="username" type="text" class="input">
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input id="password" name="password" type="password" class="input" data-type="password">
            </div>
            <div class="group">
              <input id="check" type="checkbox" class="check" checked>
              <label for="check"><span class="icon"></span> Keep me Signed in</label>
            </div>
            <div class="group">
              <input type="submit" name="login" class="button" value="Sign In">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <a href="#forgot">Forgot Password?</a>
            </div>
              
          </form>
          <form class="sign-up-htm" action="index.php" method="POST">
              <?php
				  	if(isset($_POST['register']))
				  	{
				  		RegisterNewUser($_POST['first_name'],$_POST['email_id'],$_POST['phone_no'],$_POST['password'],$_POST['l_username']);
				  	}
				  ?>
            <div class="group">
            <div class="group">
              <label for="first_name" class="label">First Name</label>
              <input id="first_name" name="first_name" type="text" class="input">
            </div>
              <label for="user" class="label">Username</label>
              <input id="l_username" name="l_username" type="text" class="input">
            </div>
            <div class="group">
              <label for="email" class="label">Email Id</label>
              <input id="email_id" name="email_id" type="text" class="input" >
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input id="password" name="password" type="password" class="input" data-type="password">
            </div>
            <div class="group">
              <label for="phone_no" class="label">Phone Number</label>
              <input id="phone_no" type="text" class="input" name="phone_no">
            </div>
            
            <div class="group">
              <input type="submit" name ="register" class="button" value="Sign Up">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <label for="tab-1">Already Member?</label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
      
      
    </body>
    </html>