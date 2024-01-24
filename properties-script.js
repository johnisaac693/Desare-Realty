function openPopup(popupId) {
    var popup = document.getElementById(popupId);
    popup.style.display = 'block';
}

function closePopup() {
    var popups = document.getElementsByClassName('popup');
    for (var i = 0; i < popups.length; i++) {
        popups[i].style.display = 'none';
    }
}
