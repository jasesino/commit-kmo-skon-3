<?php // Homepage.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Movie Page</title>
	<link rel="stylesheet" href="Homepage.css">
</head>
<body>
<!-- Progress Bar (replaces header) -->
<div class="custom-progress-bar dark">
  <img src="../Pictures/Placeholder1.png" alt="Logo" class="progress-logo">
  <div class="progress-steps">
    <span class="progress-step active">Main Menu</span>
    <span class="progress-arrow">&#8594;</span>
    <span class="progress-step">Movies</span>
    <span class="progress-arrow">&#8594;</span>
    <span class="progress-step">Cinema</span>
    <span class="progress-arrow">&#8594;</span>
    <span class="progress-step">Get Ticket</span>
    <span class="progress-arrow">&#8594;</span>
    <span class="progress-step">Seat Selection</span>
    <span class="progress-arrow">&#8594;</span>
    <span class="progress-step">Confirmation</span>
  </div>
  <div class="header-profile">
    <a href="../ProfilePage/ProfilePage.php" class="header-profile-link-rect" aria-label="Go to Profile Page">
      <img src="../Pictures/Placeholder2.png" alt="User Profile" class="header-pfp">
      <span class="header-profile-text">Profile</span>
    </a>
  </div>
</div>

<div class="tabs">
	<span class="tab active" onclick="switchTab(this)">NOW SHOWING</span>
	<span class="tab" onclick="switchTab(this)">COMING SOON</span>
</div>

<div class="carousel-container">
	<button class="carousel-button left" onclick="scrollCarousel(-1)">&#10094;</button>
	<div class="scroll-wrapper" id="carousel">
		<div class="movie-card"></div>
		<div class="movie-card"></div>
		<div class="movie-card"></div>
		<div class="movie-card"></div>
		<div class="movie-card"></div>
		<div class="movie-card"></div>
		<div class="movie-card"></div>
		<div class="movie-card"></div>
		<div class="movie-card"></div>
		<div class="movie-card"></div>
		<div class="movie-card"></div>
		<div class="movie-card"></div>
	</div>
	<button class="carousel-button right" onclick="scrollCarousel(1)">&#10095;</button>
</div>

<div class="browse-button">
	<button onclick="window.location.href='../MovieMenu/Moviemenu.php'">Browse All Movies</button>
</div>

<footer>
	© 2025 Amaguin | A Website for Database Systems
</footer>

<script src="HomePage.js"></script>
</body>
</html>
