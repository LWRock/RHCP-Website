
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <title>The Red Hot Chili Peppers</title>
  <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>

  <script type="text/javascript" src="../javascript/Java.js"></script>
  <link rel="stylesheet" type="text/css" href="../bootstrap-4.5.2-dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/shared.css" media="screen and (min-width:1025px)">
  <link rel="stylesheet" type="text/css" href="../css/catalog.css" media="screen and (min-width:1025px)">
  <link rel="stylesheet" type="text/css" href="../css/catalogsmallscreen.css" media="screen and (max-width:1024px)">
  <link rel="stylesheet" type="text/css" href="../css/sharedsmallscreen.css" media="screen and (max-width:1024px)">
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

<table>
  <thead>
    <tr>
      <td>Album Art</td>
      <td>Album Title</td>
      <td>Album Release Date</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img src="../media/TheRedHotChiliPeppersAlbumArt.jpeg" alt="The Red Hot Chili Peppers Album Art"></td>
      <td><a href="../html/theredhotchilipeppersalbum.html">The Red Hot Chili Peppers</a></td>
      <td>August 10, 1984</td>
    </tr>
      <tr>
      <td><img src="../media/FreakeyStyleyArt.jpeg" alt="Freakey Styley Album Art"></td>
      <td><a href="../html/freakystyleyalbum.html">Freaky Styley</a></td>
      <td>August 16, 1985</td>
    </tr>
      <tr>
      <td><img src="../media/UpliftMofoPartyPlanArt.jpeg" alt="Uplift Mofo Party Plan Album Art"></td>
      <td><a href="../html/upliftmofopartyplanalbum.html">Uplift Mofo Party Plan</a></td>
      <td>September 29, 1987</td>
    </tr>
      <tr>
      <td><img src="../media/AbbeyRoadEPArt.jpeg" alt="Red Hot Chili Peppers The Abbey Road EP Album Art"></td>
      <td><a href="../html/theabbeyroadepalbum.html">The Abbey Road E.P.</a></td>
      <td>May 1, 1988</td>
    </tr>
      <tr>
      <td><img src="../media/MothersMilkArt.jpeg" alt="Mothers Milk Album Art"></td>
      <td><a href="../html/mothersmilkalbum.html">Mother's Milk</a></td>
      <td>August 16, 1989</td>
    </tr>
      <tr>
      <td><img src="../media/BloodSugarSexMagikArt.jpeg" alt="Blood Sugar Sex Magik Album Art"></td>
      <td><a href="../html/bloodsugarsexmagikalbum.html">Blood Sugar Sex Magik</a></td>
      <td>September 24, 1991</td>
    </tr>
      <tr>
      <td><img src="../media/WhatHitsArt.jpeg" alt="What Hits Album Art"></td>
      <td><a href="../html/whathitsalbum.html">What Hits!?</a></td>
      <td>September 29, 1992</td>
    </tr>
      <tr>
      <td><img src="../media/OneHotMinuteArt.jpeg" alt="One Hot Minute Album Art"></td>
      <td><a href="../html/onehotminutealbum.html">One Hot Minute</a></td>
      <td>September 12, 1995</td>
    </tr>
      <tr>
      <td><img src="../media/UnderTheCoversArt.jpeg" alt="Under the Covers Essential RHCP Album Art"></td>
      <td><a href="../html/underthecoversalbum.html">Under the Covers Essential RHCP</a></td>
      <td>March 31, 1998</td>
    </tr>
      <tr>
      <td><img src="../media/CalifornicationArt.jpg" alt="Californication Album Art"></td>
      <td><a href="../html/californicationalbum.html">Californication</a></td>
      <td>June 8, 1999</td>
    </tr>
      <tr>
      <td><img src="../media/ByTheWayArt.jpeg" alt="By the Way Album Art"></td>
      <td><a href="../html/bythewayalbum.html">By The Way</a></td>
      <td>July 9, 2002</td>
    </tr>
      <tr>
      <td><img src="../media/LiveAtSlaneArt.jpeg" alt="Live At Slane Album Art"></td>
      <td><a href="../html/liveatslanealbum.html">Live At Slane</a></td>
      <td>November 13, 2003</td>
    </tr>
      <tr>
      <td><img src="../media/GreatestHitsArt.jpeg" alt="Red Hot Chili Peppers Greatest Hits Album Art"></td>
      <td><a href="../html/greatesthitsalbum.html">Red Hot Chili Peppers Greatest Hits</a></td>
      <td>November 18, 2003</td>
    </tr>
      <tr>
      <td><img src="../media/LiveInHydeParkArt.jpeg" alt="Live in Hyde Park Album Art"></td>
      <td><a href="../html/liveinhydeparkalbum.html">Live In Hyde Park</a></td>
      <td>August 3, 2004</td>
    </tr>
      <tr>
      <td><img src="../media/StadiumArcadiumArt.jpeg" alt="Stadium Arcadium Album Art"></td>
      <td><a href="../html/stadiumarcadiumalbum.html">Stadium Arcadium</a></td>
      <td>May 9, 2006</td>
    </tr>
      <tr>
      <td><img src="../media/ImWithYouArt.jpeg" alt="Im With You Album Art"></td>
      <td><a href="../html/imwithyoualbum.html">I'm With You</a></td>
      <td>August 30, 2011</td>
    </tr>
      <tr>
      <td><img src="../media/RockRollHallofFameArt.jpeg" alt="Red Hot Chili Peppers Rock and Roll Hall of Fame Covers Album Art"></td>
      <td><a href="../html/rockrollhalloffamealbum.html">Rock & Roll Hall Of Fame Covers E.P.</a></td>
      <td>May 1, 2012</td>
    </tr>
      <tr>
      <td><img src="../media/ImWithYouSinglesArt.jpeg" alt="Red Hot Chili Peppers Im With You Singles Collection Album Art"></td>
      <td><a href="../html/imwithyousinglesalbum.html">I'm With You Singles Collection</a></td>
      <td>August 10, 2012</td>
    </tr>
      <tr>
      <td><img src="../media/TheGetawayArt.jpeg" alt="The Getaway Album Art"></td>
      <td><a href="../html/thegetawayalbum.html">The Getaway</a></td>
      <td>June 17, 2016</td>
    </tr>
  </tbody>
</table>

</body>
</html>