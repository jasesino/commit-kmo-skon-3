<?php // Moviemenu.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Movie Menu</title>
  <link rel="stylesheet" href="../Homepage/Homepage.css">
  <link rel="stylesheet" href="MovieMenu.css">
</head>
<body>
  <!-- Progress Bar Header (copied from Homepage) -->
  <div class="custom-progress-bar dark">
    <img src="../Pictures/Placeholder1.png" alt="Logo" class="progress-logo">
    <div class="progress-steps">
      <a href="../Homepage/Homepage.php" class="progress-step-link">
        <span class="progress-step active">Main Menu</span>
      </a>
      <span class="progress-arrow active">&#8594;</span>
      <span class="progress-step active">Movies</span>
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

  <!-- Main Content -->
  <main class="movie-menu-main">
    <div class="movie-menu-filters">
      <div class="filters-title">BROWSE MOVIES BY</div>
      <div class="filters-row">
        <div class="filter-group">
          <label for="genre">Genre</label>
          <select id="genre">
            <option value="">ALL</option>
            <option>Action</option>
            <option>Adventure</option>
            <option>Comedy</option>
            <option>Drama</option>
            <option>Horror</option>
            <option>Thriller</option>
            <option>Romance</option>
          </select>
        </div>
        <div class="filter-group">
          <label for="cinema">Cinema</label>
          <div class="custom-cinema-dropdown" id="cinemaDropdown">
            <div class="custom-cinema-selected" id="cinemaSelected">
              <span class="cinema-name">ALL</span>
              <span class="cinema-arrow">&#9660;</span>
            </div>
            <div class="custom-cinema-options" id="cinemaOptions">
              <div class="cinema-option selected" data-cinema="ALL" data-location="" data-logo="">
                <span class="cinema-name">ALL</span>
              </div>
              <div class="cinema-option" data-cinema="SM CITY Iloilo" data-location="MANDURIAO" data-logo="../Pictures/Placeholder1.png">
                <img src="../Pictures/Placeholder1.png" alt="SM CITY Iloilo" class="cinema-logo">
                <div class="cinema-info">
                  <span class="cinema-name">SM CITY Iloilo</span>
                  <span class="cinema-location">MANDURIAO</span>
                </div>
              </div>
              <div class="cinema-option" data-cinema="Robinsons Place Jaro" data-location="JARO" data-logo="../Pictures/Placeholder2.png">
                <img src="../Pictures/Placeholder2.png" alt="Robinsons Place Jaro" class="cinema-logo">
                <div class="cinema-info">
                  <span class="cinema-name">Robinsons Place Jaro</span>
                  <span class="cinema-location">JARO</span>
                </div>
              </div>
              <div class="cinema-option" data-cinema="Festive Walk Iloilo" data-location="ILOILO" data-logo="../Pictures/Placeholder3.png">
                <img src="../Pictures/Placeholder3.png" alt="Festive Walk Iloilo" class="cinema-logo">
                <div class="cinema-info">
                  <span class="cinema-name">Festive Walk Iloilo</span>
                  <span class="cinema-location">ILOILO</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="filter-group">
          <label for="availability">Availability</label>
          <div class="custom-availability-dropdown" id="availabilityDropdown">
            <div class="custom-availability-selected" id="availabilitySelected">
              <span class="availability-name">ALL</span>
              <span class="availability-arrow">&#9660;</span>
            </div>
            <div class="custom-availability-options" id="availabilityOptions">
              <div class="availability-option selected" data-availability="ALL">
                <span class="availability-name">ALL</span>
              </div>
              <div class="availability-option" data-availability="NOW SHOWING">
                <span class="availability-name">NOW SHOWING</span>
              </div>
              <div class="availability-option" data-availability="COMING SOON">
                <span class="availability-name">COMING SOON</span>
              </div>
              <div class="availability-option" data-availability="ARCHIVED">
                <span class="availability-name">ARCHIVED</span>
              </div>
            </div>
          </div>
        </div>
        <div class="filter-group">
          <label for="rating">Rating</label>
          <div class="custom-rating-dropdown" id="ratingDropdown">
            <div class="custom-rating-selected" id="ratingSelected">
              <span class="rating-label">ALL</span>
              <span class="rating-arrow">&#9660;</span>
            </div>
            <div class="custom-rating-options" id="ratingOptions">
              <div class="rating-option selected" data-rating="ALL">ALL</div>
              <div class="rating-option" data-rating="5">★★★★★</div>
              <div class="rating-option" data-rating="4">★★★★☆</div>
              <div class="rating-option" data-rating="3">★★★☆☆</div>
              <div class="rating-option" data-rating="2">★★☆☆☆</div>
              <div class="rating-option" data-rating="1">★☆☆☆☆</div>
            </div>
          </div>
        </div>
                <div class="filter-group search-bar-group" style="margin-left:auto;min-width:220px;max-width:260px;">
          <label for="movieSearch" style="visibility:hidden;height:0;margin:0;padding:0;">Search</label>
          <input type="text" id="movieSearch" class="movie-search-bar" placeholder="Search Movies" autocomplete="off" />
        </div>
      </div>
      <hr class="filters-divider" />
    </div>
    <div class="movie-menu-grid">
      <!-- 8 movie cards with poster images and info -->
      <a href="../CinemaMenu/CinemaMenu.php" class="movie-menu-card" data-name="The Action Hero" data-genre="Action" data-cinema="SM CITY Iloilo" data-availability="NOW SHOWING" data-rating="5">
        <img src="../Pictures/Placeholder1.png" alt="Movie Poster 1" class="movie-poster-img">
        <div class="movie-info">
          <div class="movie-title">The Action Hero</div>
          <div class="movie-meta">Action | SM CITY Iloilo | NOW SHOWING</div>
          <div class="movie-rating">★★★★★</div>
        </div>
      </a>
      <a href="../CinemaMenu/CinemaMenu.php" class="movie-menu-card" data-name="Jaro Adventure" data-genre="Adventure" data-cinema="Robinsons Place Jaro" data-availability="COMING SOON" data-rating="4">
        <img src="../Pictures/Placeholder2.png" alt="Movie Poster 2" class="movie-poster-img">
        <div class="movie-info">
          <div class="movie-title">Jaro Adventure</div>
          <div class="movie-meta">Adventure | Robinsons Place Jaro | COMING SOON</div>
          <div class="movie-rating">★★★★☆</div>
        </div>
      </a>
      <a href="../CinemaMenu/CinemaMenu.php" class="movie-menu-card" data-name="Laugh Out Loud" data-genre="Comedy" data-cinema="Festive Walk Iloilo" data-availability="NOW SHOWING" data-rating="3">
        <img src="../Pictures/Placeholder3.png" alt="Movie Poster 3" class="movie-poster-img">
        <div class="movie-info">
          <div class="movie-title">Laugh Out Loud</div>
          <div class="movie-meta">Comedy | Festive Walk Iloilo | NOW SHOWING</div>
          <div class="movie-rating">★★★☆☆</div>
        </div>
      </a>
      <a href="../CinemaMenu/CinemaMenu.php" class="movie-menu-card" data-name="Dramatic Nights" data-genre="Drama" data-cinema="SM CITY Iloilo" data-availability="ARCHIVED" data-rating="2">
        <img src="../Pictures/Placeholder4.png" alt="Movie Poster 4" class="movie-poster-img">
        <div class="movie-info">
          <div class="movie-title">Dramatic Nights</div>
          <div class="movie-meta">Drama | SM CITY Iloilo | ARCHIVED</div>
          <div class="movie-rating">★★☆☆☆</div>
        </div>
      </a>
      <a href="../CinemaMenu/CinemaMenu.php" class="movie-menu-card" data-name="Haunted Iloilo" data-genre="Horror" data-cinema="Robinsons Place Jaro" data-availability="NOW SHOWING" data-rating="5">
        <img src="../Pictures/Placeholder5.png" alt="Movie Poster 5" class="movie-poster-img">
        <div class="movie-info">
          <div class="movie-title">Haunted Iloilo</div>
          <div class="movie-meta">Horror | Robinsons Place Jaro | NOW SHOWING</div>
          <div class="movie-rating">★★★★★</div>
        </div>
      </a>
      <a href="../CinemaMenu/CinemaMenu.php" class="movie-menu-card" data-name="Thrill Ride" data-genre="Thriller" data-cinema="Festive Walk Iloilo" data-availability="COMING SOON" data-rating="4">
        <img src="../Pictures/Placeholder6.png" alt="Movie Poster 6" class="movie-poster-img">
        <div class="movie-info">
          <div class="movie-title">Thrill Ride</div>
          <div class="movie-meta">Thriller | Festive Walk Iloilo | COMING SOON</div>
          <div class="movie-rating">★★★★☆</div>
        </div>
      </a>
      <a href="../CinemaMenu/CinemaMenu.php" class="movie-menu-card" data-name="Romance in Mandurriao" data-genre="Romance" data-cinema="SM CITY Iloilo" data-availability="NOW SHOWING" data-rating="3">
        <img src="../Pictures/Placeholder7.png" alt="Movie Poster 7" class="movie-poster-img">
        <div class="movie-info">
          <div class="movie-title">Romance in Mandurriao</div>
          <div class="movie-meta">Romance | SM CITY Iloilo | NOW SHOWING</div>
          <div class="movie-rating">★★★☆☆</div>
        </div>
      </a>
      <a href="../CinemaMenu/CinemaMenu.php" class="movie-menu-card" data-name="Festival of Laughs" data-genre="Comedy" data-cinema="Festive Walk Iloilo" data-availability="ARCHIVED" data-rating="2">
        <img src="../Pictures/Placeholder8.png" alt="Movie Poster 8" class="movie-poster-img">
        <div class="movie-info">
          <div class="movie-title">Festival of Laughs</div>
          <div class="movie-meta">Comedy | Festive Walk Iloilo | ARCHIVED</div>
          <div class="movie-rating">★★☆☆☆</div>
        </div>
      </a>
      <!-- Add more movie cards as needed, following the same structure -->
    </div>
  </main>

  <footer>
    © 2025 Amaguin | A Website for Database Systems
  </footer>
  <script src="MovieMenu.js"></script>
</body>
</html>