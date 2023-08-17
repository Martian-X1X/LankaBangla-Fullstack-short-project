<!DOCTYPE html>
<html>
<head>
  <title>MainPage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
  <link href="css/loginpagecss.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
</head>
<body>
  <!-- Menu -->
  <div class="navbar">
    <div class="logo-container">
      <a href="mainpage.php">
      <img class="logo" src="imgs/Logo.png" alt="Logo">
    </div>
    <ul class="navbar-items">
  <div class="dropdown">
    <button class="dropbtn">Menu</button>
    <div class="dropdown-content">
      <a href="#">Menu 1</a>
      <a href="#">Menu 2</a>
      <a href="#">Menu 3</a>
    </div>
  </div>
  <li class="navbar-item"><a href="#">About</a></li>
  <li class="navbar-item"><a href="login.php">Login</a></li>
  <li class="navbar-item signup"><a href="signup.php">Sign up</a></li>
  
</ul>


    <div>
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
          <use href="#gentle-wave" />
          <use href="#gentle-wave" />
          <use href="#gentle-wave" />
          <use href="#gentle-wave" />
        </g>
      </svg>
    </div>
    <!--Waves end-->

  </div>

  <!--Login Form-->

  <div class="container">
    <h2>Login/Signup</h2>
    <form method="post" action="login_check.php">
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" placeholder="Enter your email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>

      <label for="usertype">User Type:</label>
      <select id="usertype" name="usertype">
        <option value="">Select type</option>
        <option value="Admin">Admin</option>
        <option value="Client">Client</option>
        <option value="CRM">Customer Relationship Manager</option>
      </select>

      <div class="btn-container">
        <button class="btn">Login</button>
      </div>
    </form>
</div>
</body>
</html>
