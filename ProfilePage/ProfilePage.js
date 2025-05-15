// Interactive star rating for each movie card
const ratings = [3, 5, 0, 1]; // initial ratings for each card

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

const movieData = {
  'RECENTLY WATCHED': [
    {
      img: '../Pictures/Placeholder1.png',
      alt: 'Recently Watched',
      rating: ratings[0],
      movieIdx: 0,
      aria: 'Rate Recently Watched'
    },
    {
      img: '../Pictures/Placeholder2.png',
      alt: 'Recently Watched 2',
      rating: ratings[1],
      movieIdx: 1,
      aria: 'Rate Recently Watched 2'
    },
    {
      img: '../Pictures/Placeholder3.png',
      alt: 'Recently Watched 3',
      rating: ratings[2],
      movieIdx: 2,
      aria: 'Rate Recently Watched 3'
    }
  ],
  'WATCHED': Array.from({length: 10}, (_, i) => ({
    img: getRandomImage(),
    alt: `Watched ${i+1}`,
    rating: ratings[i % ratings.length],
    movieIdx: i % ratings.length,
    aria: `Rate Watched ${i+1}`
  })),
  'WATCHLIST': [
    {
      img: '../Pictures/Placeholder6.png',
      alt: 'Watchlist',
      rating: ratings[1],
      movieIdx: 1,
      aria: 'Rate Watchlist'
    },
    {
      img: '../Pictures/Placeholder2.png',
      alt: 'Watchlist 2',
      rating: ratings[2],
      movieIdx: 2,
      aria: 'Rate Watchlist 2'
    },
    {
      img: '../Pictures/Placeholder3.png',
      alt: 'Watchlist 3',
      rating: ratings[3],
      movieIdx: 3,
      aria: 'Rate Watchlist 3'
    },
    {
      img: '../Pictures/Placeholder1.png',
      alt: 'Watchlist 4',
      rating: ratings[0],
      movieIdx: 0,
      aria: 'Rate Watchlist 4'
    }
  ],
  'OTHER': [
    {
      img: '../Pictures/Placeholder4.png',
      alt: 'Other',
      rating: ratings[3],
      movieIdx: 3,
      aria: 'Rate Other'
    }
  ]
};

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.star-rating').forEach((ratingGroup, idx) => {
    updateStars(ratingGroup, ratings[idx]);
    ratingGroup.addEventListener('click', e => {
      if (e.target.closest('.star')) {
        const value = parseInt(e.target.closest('.star').dataset.value);
        ratings[idx] = value;
        updateStars(ratingGroup, value);
      }
    });
    ratingGroup.addEventListener('keydown', e => {
      if (e.target.classList.contains('star')) {
        let value = parseInt(e.target.dataset.value);
        if (e.key === 'Enter' || e.key === ' ') {
          ratings[idx] = value;
          updateStars(ratingGroup, value);
        }
        if (e.key === 'ArrowLeft' && value > 1) {
          ratingGroup.children[value-2].focus();
        }
        if (e.key === 'ArrowRight' && value < 5) {
          ratingGroup.children[value].focus();
        }
      }
    });
  });

  // Movie section title click/focus interactivity
  const titles = document.querySelectorAll('.movie-section-title');
  titles.forEach(title => {
    title.addEventListener('click', () => selectTitle(title));
    title.addEventListener('keydown', e => {
      if (e.key === 'Enter' || e.key === ' ') {
        selectTitle(title);
      }
    });
  });

  // Initial render for default tab
  renderMovies('RECENTLY WATCHED');
});

function updateStars(ratingGroup, value) {
  Array.from(ratingGroup.children).forEach((star, i) => {
    if (i < value) {
      star.setAttribute('aria-checked', 'true');
      star.querySelector('i').classList.add('fas');
      star.querySelector('i').classList.remove('far');
    } else {
      star.setAttribute('aria-checked', 'false');
      star.querySelector('i').classList.remove('fas');
      star.querySelector('i').classList.add('far');
    }
  });
}

function renderMovies(tab) {
  const content = document.getElementById('movie-content');
  content.innerHTML = '';
  const movies = movieData[tab] || [];
  if (movies.length === 0) return;
  const row = document.createElement('div');
  row.className = 'movie-row';
  movies.forEach((movie, idx) => {
    const section = document.createElement('div');
    section.className = 'movie-section';
    section.innerHTML = `
      <div class="movie-card">
        <img src="${movie.img}" alt="${movie.alt}" class="movie-poster" />
      </div>
      <div class="star-rating" data-movie="${movie.movieIdx}" role="radiogroup" aria-label="${movie.aria}">
        ${[1,2,3,4,5].map(i => `<span class="star" tabindex="0" role="radio" aria-checked="false" data-value="${i}"><i class="fas fa-star"></i></span>`).join('')}
      </div>
    `;
    row.appendChild(section);
  });
  content.appendChild(row);
  // Re-initialize star ratings for new DOM
  document.querySelectorAll('.star-rating').forEach((ratingGroup, idx) => {
    updateStars(ratingGroup, ratings[movies[idx].movieIdx]);
    ratingGroup.addEventListener('click', e => {
      if (e.target.closest('.star')) {
        const value = parseInt(e.target.closest('.star').dataset.value);
        ratings[movies[idx].movieIdx] = value;
        updateStars(ratingGroup, value);
      }
    });
    ratingGroup.addEventListener('keydown', e => {
      if (e.target.classList.contains('star')) {
        let value = parseInt(e.target.dataset.value);
        if (e.key === 'Enter' || e.key === ' ') {
          ratings[movies[idx].movieIdx] = value;
          updateStars(ratingGroup, value);
        }
        if (e.key === 'ArrowLeft' && value > 1) {
          ratingGroup.children[value-2].focus();
        }
        if (e.key === 'ArrowRight' && value < 5) {
          ratingGroup.children[value].focus();
        }
      }
    });
  });
}

function selectTitle(selected) {
  document.querySelectorAll('.movie-section-title').forEach(t => {
    t.classList.remove('selected', 'active');
  });
  selected.classList.add('selected', 'active');
  renderMovies(selected.dataset.title);
}

// Theme toggle logic (shared across all pages)
function setTheme(mode) {
  if (mode === 'light') {
    document.body.classList.add('light-mode');
    document.getElementById('theme-icon').classList.remove('fa-moon');
    document.getElementById('theme-icon').classList.add('fa-sun');
  } else {
    document.body.classList.remove('light-mode');
    document.getElementById('theme-icon').classList.remove('fa-sun');
    document.getElementById('theme-icon').classList.add('fa-moon');
  }
  localStorage.setItem('theme', mode);
}

function toggleTheme() {
  const isLight = document.body.classList.toggle('light-mode');
  setTheme(isLight ? 'light' : 'dark');
}

// On load, set theme from localStorage
window.addEventListener('DOMContentLoaded', function() {
  const savedTheme = localStorage.getItem('theme');
  setTheme(savedTheme === 'light' ? 'light' : 'dark');
  const themeToggle = document.getElementById('theme-toggle');
  if (themeToggle) {
    themeToggle.addEventListener('click', toggleTheme);
  }
});
