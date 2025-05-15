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