<?php
$bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
$req = $bdd->prepare('INSERT INTO facture_achat(numFACA, dateFACA, mtFACA, codeFOUR) VALUES(?, ?, ?, ?); INSERT INTO ligne_achat(qteACH, numPRO, numFACA) VALUES(?, 1, ?)');
$req->execute(array($_POST['numFACA'], $_POST['dateFACA'], $_POST['mtFACA'], $_POST['codeFOUR'], $_POST['qteACH'], $_POST['numFACA']));
?>
