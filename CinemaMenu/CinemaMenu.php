<?php // CinemaMenu.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cinema Menu</title>
  <link rel="stylesheet" href="../Homepage/Homepage.css">
  <link rel="stylesheet" href="CinemaMenu.css">
</head>
<body>
  <!-- Progress Bar Header (reused from Movie Menu, Cinema step active) -->
  <div class="custom-progress-bar dark">
    <img src="../Pictures/Placeholder1.png" alt="Logo" class="progress-logo">
    <div class="progress-steps">
      <span class="progress-step active">Main Menu</span>
      <span class="progress-arrow active">&#8594;</span>
      <a href="../MovieMenu/MovieMenu.php" class="progress-step-link">
        <span class="progress-step active">Movies</span>
      </a>
      <span class="progress-arrow active">&#8594;</span>
      <span class="progress-step active">Cinema</span>
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

  <main class="cinema-menu-main">
    <div class="cinema-banner-wrapper">
      <a href="../GetTicketMenu/GetTicketTemplate.php" class="cinema-banner-link" aria-label="Go to Get Ticket page">
        <img src="../Pictures/SmBanner.jpg" alt="SM City Iloilo Cinema Banner" class="cinema-banner-img" />
      </a>
    </div>
  </main>

  <footer>
    © 2025 Amaguin | A Website for Database Systems
  </footer>
  <div id="image-modal" class="image-modal">
    <div class="image-modal-content">
      <button class="image-modal-close" id="image-modal-close" aria-label="Close">&times;</button>
      <img id="image-modal-img" src="" alt="Cinema Fullscreen" draggable="false" />
    </div>
  </div>
  <script src="CinemaMenu.js"></script>
</body>
</html>
