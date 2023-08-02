popupMenu = document.getElementById('employee-login-menu');
popupMenuBackground = document.getElementById('employee-login-menu-background');
firstClick = true;
firstClickRS = true;

if (document.querySelector('.popup-menu_ready-suites')) {
    popupMenuRS = document.querySelector('.popup-menu_ready-suites');
    popupMenuBackgroundRS = document.querySelector('.popup-menu-background_ready-suites');
    firstClickRS = true;
}

function popupMenuToggle() {
    if (popupMenu.style.display == 'none' || firstClick) {
        popupMenu.style.display = 'flex';
        popupMenuBackground.style.display = 'block';
    } else {
        popupMenu.style.display = 'none';
        popupMenuBackground.style.display = 'none';
    }
    firstClick = false;
}

function popupMenuToggleRS() {
    if (popupMenuRS.style.display == 'none' || firstClickRS) {
        popupMenuRS.style.display = 'flex';
        popupMenuBackgroundRS.style.display = 'block';
    } else {
        popupMenuRS.style.display = 'none';
        popupMenuBackgroundRS.style.display = 'none';
    }
    firstClickRS = false;
}