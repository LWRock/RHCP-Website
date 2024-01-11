
<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('Location: login.php');
        exit;
    } else {
        // Show users the page!
    }
?>



<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>The Red Hot Chili Peppers</title>
  <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>

  <script type="text/javascript" src="../javascript/Java.js"></script>
  <link rel="stylesheet" type="text/css" href="../bootstrap-4.5.2-dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/shared.css" media="screen and (min-width:1025px)">
  <link rel="stylesheet" type="text/css" href="../css/awards.css" media="screen and (min-width:1025px)">
  <link rel="stylesheet" type="text/css" href="../css/sharedsmallscreen.css" media="screen and (max-width:1024px)">
  <link rel="stylesheet" type="text/css" href="../css/awardssmallscreen.css" media="screen and (max-width:1024px)">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides">
    <div class="numbertext">1 / 3</div>
    <img src="../media/StagePictureSuperBowl.jpg">
    <div class="text">THE RED HOT CHILI PEPPERS</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 3</div>
    <img src="../media/BandPictureBackground.jpg">
    <div class="text">THE RED HOT CHILI PEPPERS</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 3</div>
    <img src="../media/BackgroundImageHelmet.jpg">
    <div class="text">THE RED HOT CHILI PEPPERS</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script type="text/javascript">
  var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>


<div id="NewSidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Home</a>
  <a href="catalog.php">Catalog</a>
  <a href="tourdates.php">Tour Dates</a>
  <a href="awards.php">Awards</a>
  <a href="about.php">About</a>
  <a href="login.php">Login</a>
  <a href="logout.php">Logout</a>
</div>

<div id="SidebarButton" onmouseover="showNavButtonText()" onmouseout="hideNavButtonText()">
  <button class="openbtn" id="NavButton" onclick="openNav()"><i class="fa fa-bars"></i></button>
</div>

<div id="NavigationText">
  <p>Navigation</p>
</div>

<h1 id="AwardsHead">Grammy Awards/Nominations</h1>

<table>
  <thead>
    <tr>
      <td>Year</td>
      <td>Status</td>
      <td>Award</td>
      <td>Song/Album</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2011</td>
      <td>Nominee</td>
      <td>Best Rock Album</td>
      <td>I'm With You</td>
    </tr>
      <tr>
      <td>2006</td>
      <td>Winner</td>
      <td>Best Rock Performance By A Duo Or Group With Vocal</td>
      <td>Dani California</td>
    </tr>
      <tr>
      <td>2006</td>
      <td>Winner</td>
      <td>Best Rock Album</td>
      <td>Stadium Arcadium</td>
    </tr>
      <tr>
      <td>2006</td>
      <td>Nominee</td>
      <td>Album Of The Year</td>
      <td>Stadium Arcadium</td>
    </tr>
      <tr>
      <td>2012</td>
      <td>Nominee</td>
      <td>Best Short Form Music Video</td>
      <td>Dani California</td>
    </tr>
      <tr>
      <td>2000</td>
      <td>Nominee</td>
      <td>Best Rock Performance By A Duo Or Group With Vocal</td>
      <td>Californication (Track)</td>
    </tr>
      <tr>
      <td>1999</td>
      <td>Nominee</td>
      <td>Best Rock Performance By A Duo Or Group With Vocal</td>
      <td>Scar Tissue (Track)</td>
    </tr>
      <tr>
      <td>1999</td>
      <td>Nominee</td>
      <td>Best Rock Album</td>
      <td>Californication (Album)</td>
    </tr>
      <tr>
      <td>1995</td>
      <td>Nominee</td>
      <td>Best Hard Rock Performance</td>
      <td>Blood Sugar Sex Magik (Track)</td>
    </tr>
      <tr>
      <td>1992</td>
      <td>Winner</td>
      <td>Best Hard Rock Performance With Vocal</td>
      <td>Give It Away</td>
    </tr>
      <tr>
      <td>1992</td>
      <td>Nominee</td>
      <td>Best Rock Performance By A Duo Or Group With Vocal</td>
      <td>Under The Bridge (Single)</td>
    </tr>
      <tr>
      <td>1990</td>
      <td>Nominee</td>
      <td>Best Rock Performance By A Duo Or Group With Vocal</td>
      <td>Higher Ground (Single)</td>
    </tr>
  </tbody>
</table>

</body>
</html>