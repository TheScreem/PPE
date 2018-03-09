<?php

//  Récupération de l'utilisateur et de son pass hashé
$bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
$req = $bdd->prepare('SELECT idLOG, passLOG FROM login WHERE loginLOG = :loginLOG');
$req->execute(array(
    'loginLOG' => $loginLOG));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['passLOG'], $resultat['passLOG']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['loginLOG'] = $loginLOG;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
