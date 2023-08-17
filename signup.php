<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" /> 
  <link href="css/signupcss.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" /> 
</head>
<body>

  <!-- Menu -->
  <div class="navbar">
    <div class="logo-container">
      <a href="mainpage.php">
      <img class="logo" src="imgs/Logo.png" alt="Logo">
    </div>
    <ul class="navbar-items">
  <li class="navbar-item"><a href="#">About</a></li>
  <li class="navbar-item"><a href="mainpage.php">Back</a></li>
  <li class="navbar-item signup"><a href="login.php">Login</a></li>
  
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
  
  <div class="container">
    <h2>Registration</h2>
    <form method="post" action="signup_data.php" onsubmit="return validateForm()">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" placeholder="Enter your email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>

      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>

      <div class="btn-container">
        <button class="btn">Register</button>
      </div>
    </form>
  </div>

  </div>

  <!-- Popup -->
  <div id="popup" class="popup">
    <div class="popup-content">
      <h3>Warning</h3>
      <p>Password and confirm password do not match.</p>
      <button onclick="hidePopup()">OK</button>
    </div>
  </div>

  <script>
    function validateForm() {
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirm-password").value;

      if (password !== confirmPassword) {
        showPopup();
        return false; //  form submission hobe na bucchos mama
      }

      return true; //  form submission hobe shala
    }

    function showPopup() {
      var popup = document.getElementById("popup");
      popup.style.display = "block";
    }

    function hidePopup() {
      var popup = document.getElementById("popup");
      popup.style.display = "none";
    }
  </script>

</body>
</html>
