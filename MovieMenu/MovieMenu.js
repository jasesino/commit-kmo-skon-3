// Custom Cinema Dropdown Logic
const cinemaDropdown = document.getElementById('cinemaDropdown');
const cinemaSelected = document.getElementById('cinemaSelected');
const cinemaOptions = document.getElementById('cinemaOptions');

if (cinemaDropdown && cinemaSelected && cinemaOptions) {
  cinemaSelected.addEventListener('click', function(e) {
    cinemaDropdown.classList.toggle('open');
  });
  cinemaOptions.querySelectorAll('.cinema-option').forEach(option => {
    option.addEventListener('click', function(e) {
      cinemaOptions.querySelectorAll('.cinema-option').forEach(opt => opt.classList.remove('selected'));
      this.classList.add('selected');
      cinemaSelected.querySelector('.cinema-name').textContent = this.dataset.cinema;
      cinemaDropdown.classList.remove('open');
    });
  });
  document.addEventListener('click', function(e) {
    if (!cinemaDropdown.contains(e.target)) {
      cinemaDropdown.classList.remove('open');
    }
  });
}

// Custom Availability Dropdown Logic
const availabilityDropdown = document.getElementById('availabilityDropdown');
const availabilitySelected = document.getElementById('availabilitySelected');
const availabilityOptions = document.getElementById('availabilityOptions');

if (availabilityDropdown && availabilitySelected && availabilityOptions) {
  availabilitySelected.addEventListener('click', function(e) {
    availabilityDropdown.classList.toggle('open');
  });
  availabilityOptions.querySelectorAll('.availability-option').forEach(option => {
    option.addEventListener('click', function(e) {
      availabilityOptions.querySelectorAll('.availability-option').forEach(opt => opt.classList.remove('selected'));
      this.classList.add('selected');
      availabilitySelected.querySelector('.availability-name').textContent = this.dataset.availability;
      availabilityDropdown.classList.remove('open');
    });
  });
  document.addEventListener('click', function(e) {
    if (!availabilityDropdown.contains(e.target)) {
      availabilityDropdown.classList.remove('open');
    }
  });
}

// Custom Rating Dropdown Logic
const ratingDropdown = document.getElementById('ratingDropdown');
const ratingSelected = document.getElementById('ratingSelected');
const ratingOptions = document.getElementById('ratingOptions');

if (ratingDropdown && ratingSelected && ratingOptions) {
  ratingSelected.addEventListener('click', function(e) {
    ratingDropdown.classList.toggle('open');
  });
  ratingOptions.querySelectorAll('.rating-option').forEach(option => {
    option.addEventListener('click', function(e) {
      ratingOptions.querySelectorAll('.rating-option').forEach(opt => opt.classList.remove('selected'));
      this.classList.add('selected');
      ratingSelected.querySelector('.rating-label').textContent = this.textContent;
      ratingDropdown.classList.remove('open');
    });
  });
  document.addEventListener('click', function(e) {
    if (!ratingDropdown.contains(e.target)) {
      ratingDropdown.classList.remove('open');
    }
  });
}

// --- Movie Card Search & Filter Logic ---
const movieCards = document.querySelectorAll('.movie-menu-card');
const searchInput = document.getElementById('movieSearch');
const genreSelect = document.getElementById('genre');
// cinemaDropdown, availabilityDropdown, ratingDropdown already declared above

function getSelectedCinema() {
  const selected = cinemaDropdown.querySelector('.cinema-option.selected');
  return selected ? selected.dataset.cinema : 'ALL';
}
function getSelectedAvailability() {
  const selected = availabilityDropdown.querySelector('.availability-option.selected');
  return selected ? selected.dataset.availability : 'ALL';
}
function getSelectedRating() {
  const selected = ratingDropdown.querySelector('.rating-option.selected');
  return selected ? selected.dataset.rating : 'ALL';
}
function filterMovies() {
  const search = searchInput ? searchInput.value.trim().toLowerCase() : '';
  const genre = genreSelect ? genreSelect.value.trim().toLowerCase() : '';
  const cinema = getSelectedCinema().trim().toLowerCase();
  const availability = getSelectedAvailability().trim().toLowerCase();
  const rating = getSelectedRating().trim();
  movieCards.forEach(card => {
    const name = card.dataset.name ? card.dataset.name.trim().toLowerCase() : '';
    const cardGenre = card.dataset.genre ? card.dataset.genre.trim().toLowerCase() : '';
    const cardCinema = card.dataset.cinema ? card.dataset.cinema.trim().toLowerCase() : '';
    const cardAvailability = card.dataset.availability ? card.dataset.availability.trim().toLowerCase() : '';
    const cardRating = card.dataset.rating ? card.dataset.rating.trim() : '';
    let show = true;
    if (search && !name.includes(search)) show = false;
    if (genre && genre !== '' && genre !== cardGenre) show = false;
    if (cinema && cinema !== '' && cinema !== 'all' && cardCinema !== cinema) show = false;
    if (availability && availability !== '' && availability !== 'all' && cardAvailability !== availability) show = false;
    if (rating && rating !== 'ALL' && rating !== cardRating) show = false;
    card.style.display = show ? '' : 'none';
  });
}
if (searchInput) searchInput.addEventListener('input', filterMovies);
if (genreSelect) genreSelect.addEventListener('change', filterMovies);
// Cinema, Availability, Rating dropdowns already update .selected, so listen for click
if (cinemaOptions) cinemaOptions.querySelectorAll('.cinema-option').forEach(option => {
  option.addEventListener('click', function() {
    setTimeout(filterMovies, 0);
  });
});
if (availabilityOptions) availabilityOptions.querySelectorAll('.availability-option').forEach(option => {
  option.addEventListener('click', function() {
    setTimeout(filterMovies, 0);
  });
});
if (ratingOptions) ratingOptions.querySelectorAll('.rating-option').forEach(option => {
  option.addEventListener('click', function() {
    setTimeout(filterMovies, 0);
  });
});