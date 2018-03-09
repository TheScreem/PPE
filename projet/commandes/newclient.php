<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>GESTION DE COMMANDE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="../index.php">GESTION DE COMMANDE<span> DE MR JOUFFROY</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="../index.php">ACCUEIL</a></li>
					<li><a href="../commandes.php">COMMANDES</a></li>
					<li><a href="../recap.php">RECAPITULATIF</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<h2>Commandes</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>ENTREZ VOS commandes SOUHAITER</p>
								<h2>Commandes</h2>
							</header>
							<a href="newclient.php">Nouveau Client</a>
							<a href="client.php">Commande Client</a>
							<a href="fournisseur.php">Commande Fournisseur</a>
                            <form method="post" action="actionNC.php">
                                <h2>Nouveau Client</h2>
                                <p>
                                    <label for="nomCLI">Nom</label>  <input type="text" name="nomCLI" id="nomCLI" />
                                </p>
                                <p>
                                    <label for="prenomCLI">Prénom</label>  <input type="text" name="prenomCLI" id="prenomCLI" />
                                </p>
                                <p>
                                    <label for="paysCLI">Pays</label>  <input type="text" name="paysCLI" id="paysCLI"/>
                                </p>
                                <p>
                                    <label for="cpCLI">Code Postal</label>  <input type="text" name="cpCLI" id="cpCLI"/>
                                </p>
                                <p>
                                    <label for="villeCLI">Ville</label>  <input type="text" name="villeCLI" id="villeCLI"/>
                                </p>
                                <p>
                                    <label for="rueCLI">Rue</label>  <input type="text" name="rueCLI" id="rueCLI"/>
                                </p>
                                <p>
                                    <label for="rue2CLI">Rue 2</label>  <input type="text" name="rue2CLI" id="rue2CLI"CLI/>
                                </p>
                                <p>
                                    <label for="numRueCLI">Numéro de Rue</label>  <input type="text" name="numRueCLI" id="numRueCLI"CLI/>
                                </p>
                                <p>
                                    <label for="mailCLI">Mail</label>  <input type="text" name="mailCLI" id="mailCLI"/>
                                </p>
                                <p>
                                    <label for="telCLI">Téléphone</label>  <input type="text" name="telCLI" id="telCLI"/>
                                </p>
                                <p>
                                    <label for="mobileCLI">Mobile</label>  <input type="text" name="mobileCLI" id="mobileCLI"/>
                                </p>
                                <p>
                                    <label for="faxCLI">Fax</label>  <input type="text" name="faxCLI" id="faxCLI"/>
                                </p>
                                <input type="submit" value="Envoyer" />
                            </form>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<b>Commandes</b>
			</footer>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>
