// Récupération des éléments HTML
const conteneur = document.getElementById("conteneur");
const arcs = document.querySelectorAll(".arc");
const resultat = document.getElementById("resultat");

// Mélange des images de l'arc-en-ciel
const melange = document.getElementById("melange");
melange.addEventListener("click", function() {
    shuffle(arcs);
    conteneur.innerHTML = "";
    arcs.forEach(arc => {
        conteneur.appendChild(arc);
    });
});

// Fonction pour mélanger un tableau
function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

// Fonction pour permettre le drag and drop des images
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("id", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("id");
    ev.target.appendChild(document.getElementById(data));
    checkWin();
}

// Vérification de la victoire
function checkWin() {
    let win = true;
    let ordreCorrect = ["arc1", "arc2", "arc3", "arc4", "arc5", "arc
