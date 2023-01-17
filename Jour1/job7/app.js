function jourtravaille(date) {
    var jour = date.getDate();
    var mois = date.getMonth() + 1;
    var annee = date.getFullYear();
    var jourSemaine = date.getDay();

    if (annee != 2023) {
        console.log("La date n'est pas en 2020");
        return;
    }

    var jourFerie = false;
// Liste des jours fériés en 2020
    if ((mois == 1 && jour == 1) || (mois == 5 && jour == 1) || (mois == 7 && jour == 14) || (mois == 8 && jour == 15) || (mois == 11 && jour == 11) || (mois == 12 && jour == 25)) {
        jourFerie = true;
    }

    if (jourFerie) {
        console.log("Le " + jour + "/" + mois + "/" + annee + " est un jour férié");
    } else if (jourSemaine == 0 || jourSemaine == 6) {
        console.log("Non, " + jour + "/" + mois + "/" + annee + " est un week-end");
    } else {
        console.log("Oui, " + jour + "/" + mois + "/" + annee + " est un jour travaillé");
    }
}

jourtravaille(new Date(2023, 1, 1)); // 1er janvier 2023
jourtravaille(new Date(2023, 12, 25)); // 25 décembre 2023
jourtravaille(new Date(2023, 0, 6)); // dimanche 6 janvier 2023
jourtravaille(new Date(2023, 2, 13)); // vendredi 13 mars 2023