document.addEventListener('DOMContentLoaded', function() {
  // Realistic seat numbering: leftmost seat is 1, increasing left to right
  // Left and right sections: 3 seats per row, numbered 1,2,3
  // Middle section: 6 seats per row, numbered 4,5,6,7,8,9
  const seatData = [
    // Left section (seats 1,2,3)
    Array(8).fill([1,2,3]),
    // Middle section (seats 4,5,6,7,8,9)
    Array(8).fill([4,5,6,7,8,9]),
    // Right section (seats 10,11,12)
    Array(8).fill([10,11,12])
  ];
  const rowLabels = ['A','B','C','D','E','F','G','H'];
  const seatMap = document.getElementById('seat-map');
  seatMap.innerHTML = '';
  seatData.forEach((section, sectionIdx) => {
    const sectionDiv = document.createElement('div');
    sectionDiv.className = 'seat-section';
    section.forEach((row, rowIdx) => {
      const rowDiv = document.createElement('div');
      rowDiv.className = 'seat-row';
      // Row label (left)
      if (sectionIdx === 0) {
        const label = document.createElement('span');
        label.className = 'seat-label';
        label.textContent = rowLabels[rowIdx];
        rowDiv.appendChild(label);
      }
      // Seats
      row.forEach((seatNum, colIdx) => {
        const seat = document.createElement('button');
        seat.className = 'seat';
        seat.type = 'button';
        seat.dataset.section = sectionIdx;
        seat.dataset.row = rowLabels[rowIdx];
        seat.dataset.col = seatNum;
        seat.textContent = seatNum;
        // Example: make some seats unavailable (e.g., seat 5 in row C)
        if (rowLabels[rowIdx] === 'C' && seatNum === 5) {
          seat.classList.add('unavailable');
          seat.disabled = true;
        } else {
          seat.classList.add('available');
        }
        rowDiv.appendChild(seat);
      });
      // Row label (right)
      if (sectionIdx === seatData.length-1) {
        const label = document.createElement('span');
        label.className = 'seat-label';
        label.textContent = rowLabels[rowIdx];
        rowDiv.appendChild(label);
      }
      sectionDiv.appendChild(rowDiv);
    });
    seatMap.appendChild(sectionDiv);
  });
  // Seat selection logic
  seatMap.addEventListener('click', function(e) {
    if (e.target.classList.contains('seat') && e.target.classList.contains('available')) {
      e.target.classList.toggle('selected');
      updateConfirmBtn();
    }
  });

  // Confirm button logic
  const confirmBtn = document.getElementById('seat-confirm-btn');
  function updateConfirmBtn() {
    const selected = document.querySelectorAll('.seat.selected');
    confirmBtn.disabled = selected.length === 0;
  }
  confirmBtn.addEventListener('click', function() {
    const selected = Array.from(document.querySelectorAll('.seat.selected'));
    if (selected.length === 0) return;
    // Redirect to thank you page after confirming seat selection
    window.location.href = '../Confirmation/thankyou.html';
  });

  // Initial state
  updateConfirmBtn();
});