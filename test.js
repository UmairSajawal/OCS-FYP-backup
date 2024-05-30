/* step == 11 */ 
document.getElementById('yesButton').addEventListener('click', function() {
    document.getElementById('stepInput').value = 12;
    document.getElementById('step-eleven-form').submit();
});

document.getElementById('noButton').addEventListener('click', function() {
    document.getElementById('stepInput').value = 13;
    document.getElementById('step-eleven-form').submit();
});


/* step == 12*/ 
    function submitFormWithDietary(dietary) {
        document.getElementById('dietaryInput').value = dietary;
        document.querySelector('.step-twelve form').submit();
    }


        // JavaScript logic
        const startDateInput = document.getElementById('start_date');
        const endDateInput = document.getElementById('end_date');
    
        startDateInput.addEventListener('change', function() {
            // Ensure start date is not after end date
            if (new Date(this.value) > new Date(endDateInput.value)) {
                endDateInput.value = this.value;
            }
        });
    
        endDateInput.addEventListener('change', function() {
            // Ensure end date is not before start date
            if (new Date(this.value) < new Date(startDateInput.value)) {
                startDateInput.value = this.value;
            }
        });


        

        const tableBody = document.getElementById('tableBody');

        function addRow(date) {
          const row = document.createElement('tr');
          const dateCell = document.createElement('td');
          dateCell.innerText = date;
          row.appendChild(dateCell);
        
          const meals = ['Breakfast', 'Lunch', 'Dinner'];
          meals.forEach(meal => {
            const cell = document.createElement('td');
            const checkBox = document.createElement('input');
            checkBox.type = 'checkbox';
            cell.appendChild(checkBox);
            row.appendChild(cell);
          });
        
          tableBody.appendChild(row);
        }
        
        // Call the function to add rows based on your dates
        addRow('14/06');
        addRow('15/06');
        addRow('16/06');
        addRow('17/06');
        addRow('18/06');
        addRow('19/06');
        
/* /// Book Chef /// */

let currentIndex = 0;

        function moveLeft() {
            const cards = document.querySelector('.cards');
            const cardCount = document.querySelectorAll('.card').length;
            console.log('Moving Left:', currentIndex);  // Debugging log
            if (currentIndex > 0) {
                currentIndex--;
                cards.style.transform = `translateX(-${currentIndex * 100}%)`;
            }
        }

        function moveRight() {
            const cards = document.querySelector('.cards');
            const cardCount = document.querySelectorAll('.card').length;
            console.log('Moving Right:', currentIndex);  // Debugging log
            if (currentIndex < cardCount - 1) {
                currentIndex++;
                cards.style.transform = `translateX(-${currentIndex * 100}%)`;
            }
        }