<?php

/*
1- Récupération des données
2- Vérification des données utilisateurs (par exemple avec : stripslashes, htmlspecialchars, trim)
3- si les données sont valides, on applique le traitement prévu
4- sinon on renvoie l'utilisateur à la page de formulaire en lui affichant les erreurs
*/

function nettoie($champ) {
    return htmlspecialchars(addslashes(trim($champ)));
}

function auMoinsUneMajuscule($mot) {
    $tableau_lettres = str_split($mot);
    foreach($tableau_lettres as $lettre) {
        if(ord($lettre) >= 65 && ord($lettre) <= 90) {
            return true;
        }
    }
    return false;
}

function auMoinsUnChiffre($mot) {
    $tableau_lettres = str_split($mot);
    foreach($tableau_lettres as $lettre) {
        if(ord($lettre) >= 48 && ord($lettre) <= 57) {
            return true;
        }
    }
    return false;
}

$erreurs = [];

if(!empty($_POST["submit"])) {

    // récupération des données
    $civilite = $_POST["civilite"] ?? "";
    $nom = $_POST["nom"] ?? "";
    $prenom = $_POST["prenom"] ?? "";
    $adresse = $_POST["adresse"] ?? "";
    $cp = $_POST["cp"] ?? "";
    $ville = $_POST["ville"] ?? "";
    $naissance = $_POST["naissance"] ?? "";
    $age = $_POST["age"] ?? "";
    $sexe = $_POST["sexe"] ?? "";
    $infos = $_POST["infos"] ?? "";
    $newsletter = $_POST["newsletter"] ?? "";
    $email = $_POST["email"] ?? "";
    $pseudo = $_POST["pseudo"] ?? "";
    $password = $_POST["password"] ?? "";
    $confirmation = $_POST["confirmation"] ?? "";
    $tel = $_POST["tel"] ?? "";
    $mob = $_POST["mob"] ?? "";
    $categories = $_POST["categories"] ?? "";
    $cgv = $_POST["cgv"] ?? "";

    // vérification des données
    if(!empty($civilite)) {
        $civilite = nettoie($civilite);
        // TODO: vérifier la valeur de civilité ["M.", "Mme"]
    } else {
        $erreurs["civilite"] = "Le champ civilité est obligatoire";
    }

    if(!empty($nom)) {
        $nom = nettoie($nom);
    } else {
        $erreurs["nom"][] = "Le champ nom est obligatoire";
    }
    if(strlen($nom) > 50) {
        $erreurs["nom"][] = "Le champ nom doit comporter 50 caractères maximum";
    }

    if(!empty($prenom)) {
        $prenom = nettoie($prenom);
    } else {
        $erreurs["prenom"][] = "Le champ prénom est obligatoire";
    }
    if(strlen($prenom) > 50) {
        $erreurs["prenom"][] = "Le champ prénom doit comporter 50 caractères maximum";
    }

    if(!empty($adresse)) {
        $adresse = nettoie($adresse);
    } else {
        $erreurs["adresse"][] = "Le champ adresse est obligatoire";
    }
    if(strlen($adresse) > 200) {
        $erreurs["adresse"][] = "Le champ adresse doit comporter 200 caractères maximum";
    }

    if(!empty($cp)) {
        $cp = nettoie($cp);
    } else {
        $erreurs["cp"][] = "Le champ code postal est obligatoire";
    }
    if(!(strlen($cp) === 5 && is_numeric($cp))) {
        $erreurs["cp"][] = "Le champ code postal est incorrect (5 chiffres exactement)";
    }

    if(!empty($ville)) {
        $ville = nettoie($ville);
    } else {
        $erreurs["ville"] = "Le champ ville est obligatoire";
    }

    if(!empty($naissance)) {
        $naissance = nettoie($naissance);
    } else {
        $erreurs["naissance"] = "Le champ naissance est obligatoire";
    }
    // TODO: vérifier que le champ naissance est bien une date...
    
    $age = nettoie($age);
    if((int)$age < 18) {
        $erreurs["age"] = "Vous devez être majeur";
    }

    $infos = nettoie($infos);

    if(!empty($email)) {
        $email = nettoie($email);
    } else {
        $erreurs["email"] = "Le champ email est obligatoire";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs["email"] = "Le champ email est incorrect";
    }

    if(!empty($email)) {
        $email = nettoie($email);
    } else {
        $erreurs["email"] = "Le champ email est obligatoire";
    }

    if(!empty($password)) {
        $password = nettoie($password);
    } else {
        $erreurs["password"][] = "Le champ password est obligatoire";
    }

    if(!empty($confirmation)) {
        $confirmation = nettoie($confirmation);
    } else {
        $erreurs["password"][] = "Le champ confirmation est obligatoire";
    }

    if($password !== $confirmation) {
        $erreurs["password"][] = "Le mot de passe est différent de la confirmation";
    }

    // 1- verifier que le mot de passe comporte 5 caractères minimum
    if(strlen($password) < 5) {
        $erreurs["password"][] = "Le mot de passe doit contenir au moins 5 caractères";
    }
    // 2- vérifier que le mot de passe contient au moins 1 lettre majuscule
    if(!auMoinsUneMajuscule($password)) {
        $erreurs["password"][] = "Le mot de passe doit contenir au moins une lettre capitale";
    }
    // 3- idem avec au moins 1 chiffre 
    if(!auMoinsUnChiffre($password)) {
        $erreurs["password"][] = "Le mot de passe doit contenir au moins un chiffre";
    }
}