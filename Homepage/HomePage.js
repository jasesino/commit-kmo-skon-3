// Theme toggle logic (shared across all pages)
function setTheme(mode) {
  if (mode === 'light') {
    document.body.classList.add('light');
    document.body.classList.add('light-mode');
    document.getElementById('theme-icon')?.classList.remove('fa-moon');
    document.getElementById('theme-icon')?.classList.add('fa-sun');
  } else {
    document.body.classList.remove('light');
    document.body.classList.remove('light-mode');
    document.getElementById('theme-icon')?.classList.remove('fa-sun');
    document.getElementById('theme-icon')?.classList.add('fa-moon');
  }
  localStorage.setItem('theme', mode);
}

function toggleTheme() {
  const isLight = !document.body.classList.contains('light') && !document.body.classList.contains('light-mode');
  setTheme(isLight ? 'light' : 'dark');
}

// Movie card image logic
const placeholderImages = [
  '../Pictures/Placeholder1.png',
  '../Pictures/Placeholder2.png',
  '../Pictures/Placeholder3.png',
  '../Pictures/Placeholder4.png',
  '../Pictures/Placeholder5.png',
  '../Pictures/Placeholder6.png'
];

function getRandomImage() {
  return placeholderImages[Math.floor(Math.random() * placeholderImages.length)];
}

// Generate separate sets for each tab
const nowShowingMovies = Array.from({length: 12}, () => getRandomImage());
const comingSoonMovies = Array.from({length: 12}, () => getRandomImage());

function renderCarousel(tab) {
  const carousel = document.getElementById('carousel');
  if (!carousel) return;
  carousel.innerHTML = '';
  const images = tab === 'COMING SOON' ? comingSoonMovies : nowShowingMovies;
  images.forEach(img => {
    const card = document.createElement('div');
    card.className = 'movie-card';
    card.innerHTML = `<img src="${img}" alt="Movie Poster" style="width:100%;height:100%;object-fit:cover;">`;
    carousel.appendChild(card);
  });
}

function switchTab(selected) {
  document.querySelectorAll('.tab').forEach(tab => {
    tab.classList.remove('active');
  });
  selected.classList.add('active');
  renderCarousel(selected.textContent.trim());
  // Scroll carousel to the start (far left) when switching tabs
  const carousel = document.getElementById('carousel');
  if (carousel) carousel.scrollLeft = 0;
}

function scrollCarousel(direction) {
  const carousel = document.getElementById("carousel");
  const scrollAmount = 1300 * direction; // You can tweak this
  carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
}

window.addEventListener('DOMContentLoaded', function() {
  // Theme
  const savedTheme = localStorage.getItem('theme');
  setTheme(savedTheme === 'light' ? 'light' : 'dark');
  const themeToggle = document.getElementById('theme-toggle');
  if (themeToggle) {
    themeToggle.addEventListener('click', toggleTheme);
  }
  // Always set NOW SHOWING as the active tab and render its carousel
  document.querySelectorAll('.tab').forEach(tab => {
    tab.classList.remove('active');
    if (tab.textContent.trim() === 'NOW SHOWING') tab.classList.add('active');
  });
  renderCarousel('NOW SHOWING');
  // Attach tab and carousel button events
  document.querySelectorAll('.tab').forEach(tab => {
    tab.onclick = function() { switchTab(this); };
  });
  document.querySelectorAll('.carousel-button.left').forEach(btn => {
    btn.onclick = function() { scrollCarousel(-1); };
  });
  document.querySelectorAll('.carousel-button.right').forEach(btn => {
    btn.onclick = function() { scrollCarousel(1); };
  });
});
