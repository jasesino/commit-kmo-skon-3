<?php // ProfilePage.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
  <link rel="stylesheet" href="ProfilePage.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <div class="profile-container">
    <!-- Exit Button (inside profile container, top left) -->
    <a href="../Homepage/Homepage.php" class="exit-btn" id="exit-btn" aria-label="Exit to homepage">
      <i class="fas fa-sign-out-alt" aria-hidden="true"></i> <span class="exit-text">Exit</span>
    </a>
    <!-- Profile Section -->
    <section class="profile-section">
      <div class="profile-header">
        <div class="profile-avatar">
          <img src="../Pictures/Placeholder1.png" alt="Profile Picture" class="profile-picture-img" />
        </div>
        <div class="profile-info">
          <div class="profile-top">
            <span class="profile-name">Justin</span>
            <button class="edit-profile-btn">EDIT PROFILE</button>
          </div>
          <div class="profile-tags">
            #Cinephile #09 #keshi #enhypen<br>
            #asian #wavetoeath
          </div>
        </div>
      </div>
    </section>

    <!-- Title Tabs Section -->
    <section class="title-tabs-section">
      <div class="movie-title-row">
        <div class="movie-title-container">
          <div class="movie-section-title active selected" tabindex="0" data-title="TRANSACTION HISTORY">TRANSACTION&nbsp;HISTORY</div>
        </div>
        <div class="movie-title-container">
          <div class="movie-section-title" tabindex="0" data-title="WATCHLIST">WATCHLIST</div>
        </div>
        <div class="movie-title-container">
          <div class="movie-section-title" style="visibility:hidden" tabindex="-1" data-title=".">.</div>
        </div>
      </div>
    </section>

    <!-- Transaction History Section -->
    <section id="transaction-section" class="transaction-history-section" style="display: block;">
      <div id="transaction-history-list">
        <!-- Transaction cards will be dynamically injected here by JS/PHP -->
        <div class="transaction-card" id="transaction-movie-card">
          <div class="transaction-card-header">
            <span class="transaction-movie-title" id="transaction-movie-title">Movie Title Placeholder</span>
            <span class="transaction-date">2025-05-18</span>
          </div>
          <div class="transaction-details">
            <span>Seat: <strong>A1</strong></span>
            <span>Time: <strong>3:00 AM</strong></span>
            <button class="view-transaction-btn">View Details</button>
          </div>
        </div>
        <!-- More transaction cards can be injected here -->
      </div>
    </section>

    <!-- Watchlist Section -->
    <section id="watchlist-section" class="movie-rating-section" style="display: none;">
      <div id="movie-content">
        <div class="movie-row">
          <div class="movie-section">
            <div class="movie-card">
              <img src="../Pictures/Placeholder1.png" alt="Movie 1 Poster" class="movie-poster">
            </div>
            <div class="movie-title">Inception</div>
          </div>
          <div class="movie-section">
            <div class="movie-card">
              <img src="../Pictures/Placeholder2.png" alt="Movie 2 Poster" class="movie-poster">
            </div>
            <div class="movie-title">The Dark Knight</div>
          </div>
          <div class="movie-section">
            <div class="movie-card">
              <img src="../Pictures/Placeholder3.png" alt="Movie 3 Poster" class="movie-poster">
            </div>
            <div class="movie-title">Interstellar</div>
          </div>
          <div class="movie-section">
            <div class="movie-card">
              <img src="../Pictures/Placeholder4.png" alt="Movie 4 Poster" class="movie-poster">
            </div>
            <div class="movie-title">Avatar</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Transaction Modal -->
    <div id="transaction-modal" class="transaction-modal">
      <div class="transaction-modal-content">
        <span class="transaction-modal-close" id="transaction-modal-close">&times;</span>
        <h2 id="modal-movie-title">Movie Title</h2>
        <div id="modal-transaction-list">
          <!-- Transaction details will be dynamically injected here -->
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="footer-top">
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
      <nav class="footer-nav">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Our Team</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
      <div class="footer-logos">
        <a href="../Pictures/Placeholder1.png" target="_blank">
          <img src="../Pictures/Placeholder1.png" alt="Logo 1">
        </a>
        <img src="../Pictures/Placeholder2.png" alt="Logo 2">
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2025 Amaguin | A Website for Database Systems
    </div>
  </footer>
  <script src="ProfilePage.js"></script>
</body>
</html>
