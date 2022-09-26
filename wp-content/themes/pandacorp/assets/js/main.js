/**
 * Main JavaScript file.
 */

// Function to toggle the bar
function pandacorpBurgerToggle() {
    var x = document.getElementById("menu-pandacorp-burger-menu");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}