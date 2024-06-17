
document.getElementById('cardContainer').addEventListener('click', function(event) {
    // Find the closest card ancestor of the clicked element
    let card = event.target.closest('.card');

    // If the clicked element is within a card
    if (card) {
        // Check the id of the card
        if (card.id === 'firstCard') {
            window.location.href = "chatne.php";
        } else if (card.id === 'secondCard') {
            window.location.href = "IncompatibleFood.php";
        }
    }
});


// Function to scroll to the top of the page
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}