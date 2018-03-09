<?php
    $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
    $sql= "INSERT INTO client(nomCLI, prenomCLI, paysCLI, cpCLI, villeCLI, rueCLI, rue2CLI, numRueCLI, mailCLI, telCLI, mobileCLI, faxCLI, supCLI)
    VALUES
    (5,5,5,5,5,5,5,5,5,5,5,5,5);
    ";
    for($i=0;$i<=20;$i++){
        $pdo->prepare($sql)->execute();
    }


 ?>
 
