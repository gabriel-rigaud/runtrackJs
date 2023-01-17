function afficherjourssemaines() {
    var jourssemaines = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    for (var i = 0; i < jourssemaines.length; i++) {
        console.log(jourssemaines[i]);
    }
}

// Appeler la fonction lorsque le bouton est cliqué
document.getElementById("myBtn").addEventListener("click", afficherjourssemaines);