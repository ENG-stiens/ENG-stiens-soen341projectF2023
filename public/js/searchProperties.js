
    function search() {
    const searchTerm = document.getElementById('searchInput').value;
    fetch(`/search?query=${searchTerm}`)
    .then(response => response.json())
    .then(data => {
    displayResults(data);
});
}

    function displayResults(results) {
    const resultsContainer = document.getElementById('searchResults');
    resultsContainer.innerHTML = '';

    for (const result of results) {
    const listItem = document.createElement('div');
    // Display the desired fields or all fields as needed
    listItem.textContent = `${result.name}, ${result.city}`;
    resultsContainer.appendChild(listItem);
}
}
