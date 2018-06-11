<?php

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

function validateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);
    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
    return $d && $d->format($format) === $date;
}

$erreurs = [];

if(!empty($_POST["submit"])) {
    // récupération des données
    $nom = $_POST["nom"] ?? "";
    $prenom = $_POST["prenom"] ?? "";
    $adresse = $_POST["adresse"] ?? "";
    $cp = $_POST["cp"] ?? "";
    $ville = $_POST["ville"] ?? "";
    $naissance = $_POST["naissance"] ?? "";
    $email = $_POST["email"] ?? "";
    $login = $_POST["login"] ?? "";
    $password = $_POST["password"] ?? "";
    $confirmation = $_POST["confirmation"] ?? "";
    $tel = $_POST["tel"] ?? "";

    // vérification des données
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

    if(!empty($naissance)) {
        $naissance = nettoie($naissance);
    } else {
        $erreurs["naissance"][] = "Le champ date de naissance est obligatoire";
    }

    if(!validateDate($naissance)) {
        $erreurs["naissance"][] = "Le champ date de naissance n'est pas correct";
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

    if(!empty($login)) {
        $login = nettoie($login);
    } else {
        $erreurs["login"] = "Le champ login est obligatoire";
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

    if(empty($erreurs)) {
        
        $hash = password_hash($password, PASSWORD_DEFAULT);
        
        $pdo->prepare('INSERT INTO users (login, password, email, created) VALUES (?,?,?,?)')->execute([$login, $hash, $email, date("Y-m-d")]);
        
        $lastId = $pdo->lastInsertId();

        $pdo->prepare('INSERT INTO clients (nom, prenom, date_naissance, adresse, cp, ville, tel, created, user_id) VALUES (?,?,?,?,?,?,?,?,?)')->execute([$nom, $prenom, preg_replace('#(\d{2})/(\d{2})/(\d{4})\s(.*)#', '$3-$2-$1 $4', $naissance), $adresse, $cp, $ville, $tel, date("Y-m-d"), $lastId]);
        
        header("Location: http://localhost:8888/boutique/index.php?page=connexion");
    }
}