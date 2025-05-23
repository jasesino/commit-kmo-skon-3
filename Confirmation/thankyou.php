<?php // thankyou.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You | Amaguin</title>
  <link rel="stylesheet" href="../Homepage/Homepage.css">
  <link rel="stylesheet" href="thankyou.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="custom-progress-bar dark">
    <img src="../Pictures/Placeholder1.png" alt="Logo" class="progress-logo">
    <div class="progress-steps">
      <span class="progress-step active">Main Menu</span>
      <span class="progress-arrow active">&#8594;</span>
      <span class="progress-step active">Movies</span>
      <span class="progress-arrow active">&#8594;</span>
      <span class="progress-step active">Cinema</span>
      <span class="progress-arrow active">&#8594;</span>
      <span class="progress-step active">Get Ticket</span>
      <span class="progress-arrow active">&#8594;</span>
      <a href="../SeatSelection/SeatSelection.php" class="progress-step-link">
        <span class="progress-step active">Seat Selection</span>
      </a>
      <span class="progress-arrow active">&#8594;</span>
      <span class="progress-step active">Confirmation</span>
    </div>
    <div class="header-profile">
      <a href="../ProfilePage/ProfilePage.php" class="header-profile-link-rect" aria-label="Go to Profile Page">
        <img src="../Pictures/Placeholder2.png" alt="User Profile" class="header-pfp">
        <span class="header-profile-text">Profile</span>
      </a>
    </div>
  </div>
  <main>
    <section class="thankyou-container">
      <h1>Thank you, user!</h1>
      <div class="ticket-details">
        <div class="detail-row">
          <span class="label">Cinema:</span>
          <span class="value"><u><b>SM CITY ILOILO</b></u></span>
        </div>
        <div class="detail-row">
          <span class="label">Movie:</span>
          <span class="value"><u><b>TUNG TUNG SAHUR</b></u></span>
        </div>
        <div class="detail-row">
          <span class="label">Seat:</span>
          <span class="value"><u><b>A1</b></u></span>
        </div>
        <div class="detail-row">
          <span class="label">Time:</span>
          <span class="value"><u><b>3:00 AM</b></u></span>
        </div>
      </div>
      <button class="confirm-btn">CONFIRM</button>
    </section>
  </main>
  <footer>
    © 2025 Amaguin | A Website for Database Systems
  </footer>
</body>
</html>
