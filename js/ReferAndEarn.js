function myFunction() {
    var copyText = document.getElementById("referralCodeSpan");

    // Create a range to select the text inside the span
    var range = document.createRange();
    range.selectNode(copyText);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);

    // Copy the text inside the span to the clipboard
    navigator.clipboard.writeText(copyText.innerText);

    // Clean up the selection
    window.getSelection().removeAllRanges();

    // Show the snackbar notification
    var snackbar = document.getElementById("referralCodeSnackbar");
    snackbar.className = "show";
    setTimeout(function () { snackbar.className = snackbar.className.replace("show", ""); }, 3000);
}
