function alpha(ch) {
    ch = ch.toUpperCase();
    for (let i = 0; i < ch.length; i++) {
        c = ch.charAt(i);
        if (c < "A" || c > "Z") {
            return false;
        }

    }
    return true;
}

function chiffre(ch) {

    for (let i = 0; i < ch.length; i++) {
        c = ch.charAt(i);
        if (c < "0" || c > "9") {
            return false;
        }

    }
    return true;
}

function verif1() {
    permis = document.f1.permis.value;
    if (permis.length != 8) {
        alert("Permis invalide longeur doit etre 8");
        return false;
    }
    if (permis.indexOf("/") != 2) {
        alert("Permis invalide longeur doit etre dor format xx/xxxxx");
        return false;
    }
    ch1 = permis.substring(0, permis.indexOf("/"));
    ch2 = permis.substring(permis.indexOf("/") + 1, permis.length);
    if (chiffre(ch1) == false || chiffre(ch2) == false) {
        alert("Permis invalide longeur doit etre dor format xx/xxxxx avec les x sotns des chiffres");
        return false;
    }
    nom = document.f1.nom.value;
    prenom = document.f1.prenom.value;
    if (!alpha(nom)) {
        alert("nom invalide doit etre alphabetiques");
        return false;
    }
    if (nom.length < 3 || nom.length > 20) {
        alert("nom invalide doit etre de logneur compris entre 3 et 20");
        return false;
    }
    if (!alpha(prenom)) {
        alert("prenom invalide doit etre alphabetiques");
        return false;
    }
    if (prenom.length < 3 || prenom.length > 20) {
        alert("prenom invalide doit etre de logneur compris entre 3 et 20");
        return false;
    }
    genre = document.f1.genre;
    if (genre[0].checked == false && genre[1].checked == false) {
        alert("Choisir un genre");
        return false;
    }
}

function verif2() {
    permis = document.f1.permis.value;
    if (permis.length != 8) {
        alert("Permis invalide longeur doit etre 8");
        return false;
    }
    if (permis.indexOf("/") != 2) {
        alert("Permis invalide longeur doit etre dor format xx/xxxxx");
        return false;
    }
    ch1 = permis.substring(0, permis.indexOf("/"));
    ch2 = permis.substring(permis.indexOf("/") + 1, permis.length);
    if (chiffre(ch1) == false || chiffre(ch2) == false) {
        alert("Permis invalide longeur doit etre dor format xx/xxxxx avec les x sotns des chiffres");
        return false;
    }

    modele = document.f1.modele;
    if (modele.selectedIndex == 0) {
        alert("Choisir un modele");
        return false;
    }
    e1 = document.f1.e1.value;
    e2 = document.f1.e2.value;
    e3 = document.f1.e3.value;
    if (e1 < 1 || e1 > 5) {
        alert("Choisir un nombre entre 1 et 5 pour champ securite");
        return false;
    }

    if (e2 < 1 || e2 > 5) {
        alert("Choisir un nombre entre 1 et 5 pour champ conduite");
        return false;
    }
    if (e3 < 1 || e3 > 5) {
        alert("Choisir un nombre entre 1 et 5 pour champ confort");
        return false;
    }
    robot = document.f1.robot;
    if (robot.checked == false) {
        alert("verifier que tu n'est pas un robot !");
        return false;
    }
}