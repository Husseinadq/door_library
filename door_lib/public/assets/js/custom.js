document.getElementById('search-btn').addEventListener('click', function() {
    const searchInput = document.getElementById('search-input');
    const searchTerm = searchInput.value.trim();
    if (searchTerm) {
        // Perform search using the searchTerm
        console.log('Searching for:', searchTerm);
    } else {
        alert('Please enter a search term.');
    }
});
