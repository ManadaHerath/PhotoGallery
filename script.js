// Function to show the pop-up
function showPopup() {
    var popup = document.getElementById("feedback-popup");
    popup.style.display = "block";

    // Hide the pop-up after 3 seconds (3000 milliseconds)
    setTimeout(function() {
        popup.style.display = "none";
    }, 3000);
}

// Attach event listener to the form submission
document.getElementById("feedback-form").addEventListener("submit", function(event) {
    // Show the pop-up when the form is submitted
    showPopup();
});
