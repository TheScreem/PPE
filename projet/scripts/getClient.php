<?php
    $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM client WHERE supCLI = 0;');
    ?>
    <table>
        <thead>
            <tr>
                <th><strong>Code</strong></th>
                <th><strong>Nom</strong></th>
                <th><strong>Prénom</strong></th>
                <th><strong>Pays</strong></th>
                <th><strong>Code Postal</strong></th>
                <th><strong>Ville</strong></th>
                <th><strong>Rue</strong></th>
                <th><strong>Rue 2</strong></th>
                <th><strong>Num Rue</strong></th>
                <th><strong>Mail</strong></th>
                <th><strong>Mobile</strong></th>
                <th><strong>Fax</strong></th>

            </tr>
        </thead>
<?php
    $i=0;
    while ($donnees = $reponse->fetch())
    {
        $i++;
        $client[] = $donnees['codeCLI'];
?>
                <tbody>
                    <tr>
                        <td><?php echo $donnees['codeCLI']; ?><br /></td>
                        <td><?php echo $donnees['nomCLI']; ?><br /></td>
                        <td><?php echo $donnees['prenomCLI']; ?><br /></td>
                        <td><?php echo $donnees['paysCLI']; ?><br /></td>
                        <td><?php echo $donnees['cpCLI']; ?><br /></td>
                        <td><?php echo $donnees['villeCLI']; ?><br /></td>
                        <td><?php echo $donnees['rueCLI']; ?><br /></td>
                        <td><?php echo $donnees['rue2CLI']; ?><br /></td>
                        <td><?php echo $donnees['numRueCLI']; ?><br /></td>
                        <td><?php echo $donnees['mailCLI']; ?><br /></td>
                        <td><?php echo $donnees['mobileCLI']; ?><br /></td>
                        <td><?php echo $donnees['faxCLI']; ?><br /></td>
                        <td><a href=<?php echo "supprimer.php?id=";echo $donnees['codeCLI'];echo ""; ?> id='<?php echo $donnees['codeCLI']; ?>'>SUPPRIMER</a><br /></td>
                    </tr>
                </tbody>
        </p>
    <?php } ?>
        <table>
    <?php
    $reponse->closeCursor(); // Termine le traitement de la requête

    ?>
