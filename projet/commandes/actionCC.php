<?php
$bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
$req = $bdd->prepare('INSERT INTO facture_achat(codeCLI, dateFAC, echeanceFAC, termeRegFAC, modeReglFAC, payeFAC, mtFAC, fpFAC) VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['codeCLI'], $_POST['dateFAC'], $_POST['echeanceFAC'], $_POST['termeRegFAC'], $_POST['modeReglFAC'], $_POST['payeFAC'], $_POST['mtFAC'], $_POST['fpFAC']));
?>
