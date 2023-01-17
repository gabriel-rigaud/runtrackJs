function sommenombrespremiers(n1, n2) {
    // Fonction pour vérifier si un nombre est premier
    function estPremier(n) {
        if (n <= 1) {
            return false;
        }
        for (let i = 2; i < n; i++) {
            if (n % i === 0) {
                return false;
            }
        }
        return true;
    }

    // Vérifier si les deux nombres sont premiers
    if (estPremier(n1) && estPremier(n2)) {
        return n1 + n2;
    } else {
        return false;
    }
}


// Appeler la fonction lorsque le bouton est cliqué
document.getElementById("myBtn").addEventListener("click", sommenombrespremiers);