<!DOCTYPE html>
<html>
<head>
  <title>MainPage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
</head>
<body>
  <!-- Menu -->
  <div class="navbar">
    <div class="logo-container">
      <a href="mainpage.php">
      <img class="logo" src="imgs/Logo.png" alt="Logo">
    </div>
    <ul class="navbar-items">
  <li class="navbar-item"><a href="aboutus.php">About</a></li>
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
  
  <div class="content flex"></div>
   
  <div class="container">
   
        <div class="carousel">
        <div class="carousel-inner">
          <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked=      "checked">
          <div class="carousel-item">
      <img src="imgs/Bank1.jpg">
          </div>
          <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
          <div class="carousel-item">
            <img src="imgs/Bank5.jpg">
          </div>
          <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
          <div class="carousel-item">
            <img src="imgs/Bank2.jpg">
          </div>
          <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
          <div class="carousel-item">
            <img src="imgs/Bank3.jpg">
          </div>
          <input class="carousel-open" type="radio" id="carousel-5" name="carousel" aria-hidden="true" hidden="">
          <div class="carousel-item">
            <img src="imgs/Bank4.jpg">
          </div>
          <label for="carousel-5" class="carousel-control prev control-1">‹</label>
    <label for="carousel-2" class="carousel-control next control-1">›</label>
    <label for="carousel-1" class="carousel-control prev control-2">‹</label>
    <label for="carousel-3" class="carousel-control next control-2">›</label>
    <label for="carousel-2" class="carousel-control prev control-3">‹</label>
    <label for="carousel-4" class="carousel-control next control-3">›</label>
    <label for="carousel-3" class="carousel-control prev control-4">‹</label>
    <label for="carousel-5" class="carousel-control next control-4">›</label>
    <label for="carousel-4" class="carousel-control prev control-5">‹</label>
    <label for="carousel-1" class="carousel-control next control-5">›</label>
          <ol class="carousel-indicators">
            <li>
              <label for="carousel-1" class="carousel-bullet">•</label>
            </li>
            <li>
              <label for="carousel-2" class="carousel-bullet">•</label>
            </li>
            <li>
              <label for="carousel-3" class="carousel-bullet">•</label>
            </li>
            <li>
              <label for="carousel-4" class="carousel-bullet">•</label>
            </li>
            <li>
              <label for="carousel-5" class="carousel-bullet">•</label>
            </li>
          </ol>
        </div>
      </div>
</div>
</body>
</html>
