<?php // GetTicketTemplate.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Get Ticket</title>
  <link rel="stylesheet" href="../../../Homepage/Homepage.css">
  <link rel="stylesheet" href="GetTicketTemplate.css">
</head>
<body>
  <!-- Progress Bar Header (Get Ticket step active) -->
  <div class="custom-progress-bar dark">
    <img src="../../../Pictures/Placeholder1.png" alt="Logo" class="progress-logo">
    <div class="progress-steps">
      <span class="progress-step active">Main Menu</span>
      <span class="progress-arrow active">&#8594;</span>
      <span class="progress-step active">Movies</span>
      <span class="progress-arrow active">&#8594;</span>
      <span class="progress-step active">Cinema</span>
      <span class="progress-arrow active">&#8594;</span>
      <span class="progress-step active">Get Ticket</span>
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

  <main class="get-ticket-main">
    <div class="get-ticket-card">
      <div class="get-ticket-movie-row">
        <div class="get-ticket-poster-placeholder">
          <img src="../../../Pictures/Placeholder3.png" alt="Movie Poster" class="get-ticket-poster-img" />
        </div>
        <div class="get-ticket-movie-info">
          <div class="get-ticket-title-row">
            <div class="get-ticket-title">TUNG TUNG SAHUR</div>
          </div>
          <div class="get-ticket-meta-row">
            <span class="get-ticket-year">2025</span>
            <span class="get-ticket-dot">•</span>
            <span class="get-ticket-duration">1 hr 30 min</span>
            <span class="get-ticket-dot">•</span>
            <span class="get-ticket-rating">★★★★★</span>
          </div>
          <div class="get-ticket-genre">COMEDY</div>
        </div>
      </div>
      <div class="get-ticket-cinema-row">
        <div class="get-ticket-cinema-name">SM CITY ILOILO CINEMA 2</div>
      </div>
      <div class="get-ticket-showtime-label">SHOWTIMES</div>
      <div class="get-ticket-showtimes">
        <button class="get-ticket-showtime-btn selected">10:30 AM</button>
        <button class="get-ticket-showtime-btn">1:00 PM</button>
        <button class="get-ticket-showtime-btn">3:45 PM</button>
        <button class="get-ticket-showtime-btn">6:15 PM</button>
        <button class="get-ticket-showtime-btn">8:30 PM</button>
      </div>
    </div>
    <a href="../SeatSelection/SeatSelection.php">
      <button class="get-ticket-select-seats">Select Seats</button>
    </a>
  </main>

  <footer>
    © 2025 Amaguin | A Website for Database Systems
  </footer>
  <script src="GetTicketTemplate.js"></script>
</body>
</html>
