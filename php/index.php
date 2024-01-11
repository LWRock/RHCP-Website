

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
  <link rel="stylesheet" type="text/css" href="../css/index.css" media="screen and (min-width:1025px)">
  <link rel="stylesheet" type="text/css" href="../css/sharedsmallscreen.css" media="screen and (max-width:1024px)">
  <link rel="stylesheet" type="text/css" href="../css/indexsmallscreen.css" media="screen and (max-width:1024px)">
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


<div class="container">
  <video id="STSVideo" controls>
    <source src="../media/Red Hot Chili Peppers - Soul To Squeeze [Official Music Video].mp4"  type="video/mp4">
  </video>
  <video id="CaliVideo" controls>
    <source src="../media/Red Hot Chili Peppers - Californication [Official Music Video].mp4" type="video/mp4">
  </video>
  <video id="SnowVideo" controls>
    <source src="../media/Red Hot Chili Peppers - Snow [Hey Oh] (Video).mp4" type="video/mp4">
  </video>

  <h1 id="Soul2SqueezeHeader">Music Video: Soul To Squeeze</h1>

  <h1 id="CalifornHeader">Music Video: Californication</h1>

  <h1 id="SnowHeader">Music Video: Snow (Hey Oh)</h1>


  <button id="VideosButton" class="btn btn-info bg-danger" role="button" onclick="hideMusicVideos()">Show/Hide Videos</button>


  <p id="DiscographyGuide">If you enjoyed these three songs and would like to see more of the Red Hot Chili Peppers Discography click the button below or you can click the Discography link in the Navigation Bar, and when you get there you can click the Album titles to get the full track lists for each album.</p>

  <a id="DiscButton" href="catalog.html" class="btn btn-info bg-danger" role="button">Discography</a>

  <h1 id="TourDatesHeader">Upcoming Tour Dates</h1>

  <table id="TourDatesTable">
  <thead>
    <tr>
      <td>Show Date</td>
      <td>Place</td>
      <td>Event</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>May 28</td>
      <td>Napa Valley, CA</td>
      <td>Bottlerock 2021</td>
    </tr>
    <tr>
      <td>June 16</td>
      <td>Florence, IT</td>
      <td>Firenze Rocks 2021</td>
    </tr>
    <tr>
      <td>June 18</td>
      <td>Landgraaf, NL</td>
      <td>Pinkpop Festival 2021</td>
    </tr>
    <tr>
      <td>June 19</td>
      <td>Lyon, FR</td>
      <td>Felyn Stadium Festival 2021</td>
    </tr>
  </tbody>
</table>

<p id="TourDatesGuide">If you would like to see the full list of the Red Hot Chili Peppers upcoming tour dates please click the Tour Dates button below, or you can click the Tour Dates link in the Navigation Bar.</p>

<a id="TourButton" href="tourdates.html" class="btn btn-info bg-danger" role="button">Tour Dates</a>

<h1 id="AwardsHeader">Grammy Awards/Nominations</h1>

<table id="AwardsTable">
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

<p id="AwardsGuide">If you would like to see the full list of Grammy Awards/Nominations the Red Hot Chili Peppers have earned please click the Awards button below, or you can click the Awards link in the Navigation Bar.</p>

<a id="AwardsButton" href="awards.html" class="btn btn-info bg-danger" role="button">Awards</a>

<h1 id="AboutHeader">About</h1>

<p id="AboutGuide">If you would like to know more about me the developer then please click the About button below, or you can click the About link in the Navigation Bar.</p>

<a id="AboutButton" href="about.html" class="btn btn-info bg-danger" role="button">About</a>

</div>



</body>
</html>