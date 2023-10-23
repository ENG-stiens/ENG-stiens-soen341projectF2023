
// -------- code for searching brokers and auto-filling the form from values read from the database ----------------
// attributes
const searchInput = document.getElementById('search');
const suggestionsContainer = document.getElementById('search-suggestions');
const idInput = document.getElementById('id-broker');
const nameInput = document.getElementById('name');
const lastNameInput = document.getElementById('last-name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');

// suggest brokers from the database as the user types
searchInput.addEventListener('input', () => {
    const searchValue = searchInput.value.trim();
    if (searchValue.length > 0) {
        // fetch broker suggestions
        fetch(`/searchBrokers?search=${searchValue}`)
            .then((response) => response.json())
            .then((data) => {
                // display the suggestions in the dropdown
                displaySuggestions(data);
            })
            .catch((error) => {
                console.error('Error: Cannot fetch brokers from database ' + error);
            });
    } else {
        suggestionsContainer.innerHTML = '';
    }
});


function displaySuggestions(suggestions) {
    suggestionsContainer.innerHTML = '';

    // does not show suggestion if what types doesn't match
    if (suggestions.length === 0) {
        suggestionsContainer.style.display = 'none';
        return;
    }

    suggestionsContainer.style.display = 'block';

    // show suggestions if match found
    suggestions.forEach((suggestion) => {
        const suggestionElement = document.createElement('div');
        suggestionElement.className = 'suggestion-item';
        suggestionElement.textContent = `${suggestion.name} ${suggestion.last_name}`;

        // when broker clicked, it autofills the form
        suggestionElement.addEventListener('click', () => {
            searchInput.value = `${suggestion.name} ${suggestion.last_name}`;

            // fill form
            idInput.value = suggestion.idbroker_info;
            nameInput.value = suggestion.name;
            lastNameInput.value = suggestion.last_name;
            emailInput.value = suggestion.email;
            phoneInput.value = suggestion.phone;

            // clear the dropdown
            suggestionsContainer.innerHTML = '';
        });

        suggestionsContainer.appendChild(suggestionElement);
    });
}


// Close the dropdown when clicking outside the input and suggestions
document.addEventListener('click', (event) => {
    if (!searchInput.contains(event.target) && !suggestionsContainer.contains(event.target)) {
        suggestionsContainer.innerHTML = '';
    }
});

// ---------------------------------------------------------------------------------------------------------------------

// Add CRUD javascript here