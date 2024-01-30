function rateApp() {
    var selectedStar = document.querySelector('.rate input:checked').value;

    if (selectedStar >= 4) {
        // Open Play Store link in a new tab
        window.open('https://play.google.com/store/apps/details?id=com.tradgo', '_blank'); // Replace with your actual Play Store link

        // Set a timeout to hide the offcanvas after 2 seconds
        setTimeout(function () {
            var offcanvas = new bootstrap.Offcanvas(document.getElementById('RateReviewBottomOffcanvas'));
            offcanvas.hide();
        }, 2000);
    } else {
        // Handle lower ratings or do nothing
    }
}
