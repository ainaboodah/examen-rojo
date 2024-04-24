<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <link rel="stylesheet" href="./assets/styles.css">
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
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
      <form action="#">
        <input type="text" name="email" placeholder="Enter your email"> <!-- Added ID 'signupEmail' here -->
        <input type="password" name="mdp" placeholder="Create a password"> <!-- Added ID 'signupPassword' here -->
        <input type="password" name="mdp" placeholder="Confirm your password"> <!-- Added ID 'confirmPassword' here -->
        <input type="submit" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>
