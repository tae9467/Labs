/**
 * Opens the navigation menu
 * @function toggleMobileMenu
 * @param {string} menu - a classname that gets put onto the mobile menu
 * @returns {void}
 */
function toggleMobileMenu(menu) {
    menu.classList.toggle('open');
    if(menu.classList.contains('open')) {
        document.querySelector('.hideInDesktop').style.display = 'none';
        document.querySelector('header div').style.height = '512px';
    } else {
        document.querySelector('.hideInDesktop').style.display = 'block';
        document.querySelector('header div').style.height = '212px';
    }
}

/**
 * Turns all three divs (bars) border color in the the mobile menu a accent color when hovering over one bar
 * @function turnColor
 * @returns {void}
 */
function turnColor() {
    const bars = document.querySelectorAll('.bar');
    bars.forEach(bar => {
        bar.style.borderColor = '#000000';
    });
}

/**
 * Turns all three divs (bars) border color in the the mobile menu back to the original color simultaniously when the mouse isn't hovering over a bar
 * @function resetColor
 * @returns {void}
 */
function resetColor() {
    const bars = document.querySelectorAll('.bar');
    bars.forEach(bar => {
        bar.style.borderColor = '#FCFCFC';
    });
}