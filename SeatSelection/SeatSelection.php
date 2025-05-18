<?php // SeatSelection.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Seat Selection</title>
  <link rel="stylesheet" href="../Homepage/Homepage.css">
  <link rel="stylesheet" href="SeatSelection.css">
</head>
<body>
  <!-- Progress Bar Header (Seat Selection step active) -->
  <div class="custom-progress-bar dark">
    <img src="../Pictures/Placeholder1.png" alt="Logo" class="progress-logo">
    <div class="progress-steps">
      <span class="progress-step active">Main Menu</span>
      <span class="progress-arrow active">&#8594;</span>
      <span class="progress-step active">Movies</span>
      <span class="progress-arrow active">&#8594;</span>
      <span class="progress-step active">Cinema</span>
      <span class="progress-arrow active">&#8594;</span>
      <a href="../GetTicketMenu/GetTicketTemplate.php" class="progress-step-link">
        <span class="progress-step active">get Ticket</span>
      </a>
      <span class="progress-arrow active">&#8594;</span>
      <span class="progress-step active">Seat Selection</span>
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

  <main class="seat-selection-main">
    <div class="seat-legend">
      <span class="seat-legend-item unavailable"><span class="seat-box">1</span> UNAVAILABLE</span>
      <span class="seat-legend-item available"><span class="seat-box">1</span> AVAILABLE</span>
    </div>
    <div class="seat-screen">SCREEN</div>
    <div id="seat-map" class="seat-map"></div>
  </main>
  <div class="seat-confirm-container">
    <button id="seat-confirm-btn" class="seat-confirm-btn" disabled>Confirm Selection</button>
  </div>

  <footer>
    © 2025 Amaguin | A Website for Database Systems
  </footer>
  <script src="SeatSelection.js"></script>
</body>
</html>
