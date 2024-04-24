<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/login.css');?>">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div id="loginForm" class="login form"> <!-- Added ID 'loginForm' here -->
      <header>Login</header>
      <form action="#" method="GET">
        <input type="text" name="pseudo" placeholder="Enter your email"> <!-- Added ID 'loginEmail' here -->
        <input type="password" name="mdp" placeholder="Enter your password"> <!-- Added ID 'loginPassword' here -->
        <a href="#">Forgot password?</a>
        <input type="submit" class="button" value="Login">
        <div id="errorDiv" style="color: red;"></div>
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
      <form action="<?php echo base_url('LoginController/checkLogin');?>" method="POST">
        <input type="text" name="email" placeholder="Enter your email" required> <!-- Added ID 'signupEmail' here -->
        <input type="password" name="mdp" placeholder="Create a password" required> <!-- Added ID 'signupPassword' here -->
        <input type="password" name="mdp" placeholder="Confirm your password" required> <!-- Added ID 'confirmPassword' here -->
        <input type="submit" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
      <!-- Error message div -->
      <div id="errorDiv" style="color: red;"></div>
</body>
</html>
