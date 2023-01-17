//fonction pour afficher la pop-up
function showPopup() {
    console.log("Pop-up affichée !");
    alert("Hello Javascript!");
}

// Appeler la fonction lorsque le bouton est cliqué
document.getElementById("myBtn").addEventListener("click", showPopup);