<?php
$bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
$req = $bdd->prepare('INSERT INTO client(nomCLI, prenomCLI, paysCLI, cpCLI, villeCLI, rueCLI, rue2CLI, numRueCLI, mailCLI, telCLI, mobileCLI, faxCLI) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['nomCLI'], $_POST['prenomCLI'], $_POST['paysCLI'], $_POST['cpCLI'], $_POST['villeCLI'], $_POST['rueCLI'], $_POST['rue2CLI'], $_POST['numRueCLI'], $_POST['mailCLI'], $_POST['telCLI'],$_POST['mobileCLI'], $_POST['faxCLI']));
?>
