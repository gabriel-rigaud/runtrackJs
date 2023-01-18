// Récupération de l'élément footer
var footer = document.getElementById("footer");

// Fonction pour calculer le pourcentage de défilement de la page
function getScrollPercent() {
    var h = document.documentElement,
        b = document.body,
        st = 'scrollTop',
        sh = 'scrollHeight';
    return (h[st]||b[st]) / ((h[sh]||b[sh]) - h.clientHeight) * 100;
}

// Fonction d'animation de la couleur de fond
function animateBackground() {
    var scrollPercent = getScrollPercent();
    var newColor = "rgb(" + (255 - scrollPercent) + "," + scrollPercent + ",0)";
    footer.style.backgroundColor = newColor;
    requestAnimationFrame(animateBackground);
}

// Démarrage de l'animation
animateBackground();
