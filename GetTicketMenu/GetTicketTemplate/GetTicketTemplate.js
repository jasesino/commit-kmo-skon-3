document.addEventListener('DOMContentLoaded', function() {
  const showtimeBtns = document.querySelectorAll('.get-ticket-showtime-btn');
  showtimeBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      showtimeBtns.forEach(b => b.classList.remove('selected'));
      this.classList.add('selected');
    });
  });
});