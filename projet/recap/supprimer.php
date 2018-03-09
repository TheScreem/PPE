<?php
    include_once('../scripts/getClient.php');
    $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT codeCLI FROM client');
    $id = $_GET['id'];
    $sql= "UPDATE client SET supCLI = 1 WHERE codeCLI=".$id;
    $req = $bdd->exec($sql);

    header("location: client.php");
 ?>
