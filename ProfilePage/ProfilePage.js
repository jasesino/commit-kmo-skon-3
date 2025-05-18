// DOM Elements
let transactionSection;
let watchlistSection;

document.addEventListener('DOMContentLoaded', () => {
  // Initialize DOM elements
  transactionSection = document.getElementById('transaction-section');
  watchlistSection = document.getElementById('watchlist-section');

  // Set initial visibility
  transactionSection.style.display = 'block';
  watchlistSection.style.display = 'none';

  // Tab switching logic
  const tabTitles = document.querySelectorAll('.movie-section-title');
  tabTitles.forEach(tab => {
    tab.addEventListener('click', () => {
      console.log('Tab clicked:', tab.dataset.title);
      
      // Remove active class from all tabs
      tabTitles.forEach(t => t.classList.remove('active', 'selected'));
      // Add active class to clicked tab
      tab.classList.add('active', 'selected');
      
      // Switch content based on tab
      if (tab.dataset.title === 'TRANSACTION HISTORY') {
        console.log('Showing Transaction History');
        transactionSection.style.display = 'block';
        watchlistSection.style.display = 'none';
      } else if (tab.dataset.title === 'WATCHLIST') {
        console.log('Showing Watchlist');
        transactionSection.style.display = 'none';
        watchlistSection.style.display = 'block';
      }
    });
  });

  // Transaction modal logic
  setupTransactionModal();
});

// Watchlist rendering
function renderWatchlist() {
  const watchlistMovies = [
    { img: '../Pictures/Placeholder6.png', title: 'Movie 1', alt: 'Movie 1 Poster' },
    { img: '../Pictures/Placeholder2.png', title: 'Movie 2', alt: 'Movie 2 Poster' },
    { img: '../Pictures/Placeholder3.png', title: 'Movie 3', alt: 'Movie 3 Poster' },
    { img: '../Pictures/Placeholder1.png', title: 'Movie 4', alt: 'Movie 4 Poster' }
  ];

  movieContent.innerHTML = '';
  const row = document.createElement('div');
  row.className = 'movie-row';

  watchlistMovies.forEach(movie => {
    const section = document.createElement('div');
    section.className = 'movie-section';
    section.innerHTML = `
      <div class="movie-card">
        <img src="${movie.img}" alt="${movie.alt}" class="movie-poster" />
      </div>
      <div class="movie-title">${movie.title}</div>
    `;
    row.appendChild(section);
  });

  movieContent.appendChild(row);
}

// Transaction modal setup
function setupTransactionModal() {
  const modal = document.getElementById('transaction-modal');
  const modalClose = document.getElementById('transaction-modal-close');
  const viewTransactionBtns = document.querySelectorAll('.view-transaction-btn');

  viewTransactionBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const movieTitle = btn.closest('.transaction-card').querySelector('.transaction-movie-title').textContent;
      openTransactionModal({
        title: movieTitle,
        date: '2025-05-18',
        seat: 'A1',
        time: '3:00 AM',
        price: '₱250.00',
        payment: 'GCash',
        status: 'Completed'
      });
    });
  });

  modalClose.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  window.addEventListener('click', (event) => {
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  });
}

function openTransactionModal(data) {
  const modal = document.getElementById('transaction-modal');
  document.getElementById('modal-movie-title').textContent = data.title;
  document.getElementById('modal-transaction-list').innerHTML = `
    <div><strong>Date:</strong> ${data.date}</div>
    <div><strong>Seat:</strong> ${data.seat}</div>
    <div><strong>Time:</strong> ${data.time}</div>
    <div><strong>Price:</strong> ${data.price}</div>
    <div><strong>Payment Method:</strong> ${data.payment}</div>
    <div><strong>Status:</strong> ${data.status}</div>
  `;
  modal.style.display = 'block';
}
