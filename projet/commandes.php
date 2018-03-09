<!DOCTYPE HTML>
<html>
	<head>
		<title>GESTION DE COMMANDE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php">GESTION DE COMMANDE<span> DE MR JOUFFROY</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">ACCUEIL</a></li>
					<li><a href="commandes.php">COMMANDES</a></li>
					<li><a href="recap.php">RECAPITULATIF</a></li>
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
								<label for="commande"><h2>Commande</h2></label>
								<form name="votre_commande" method="post" action="commande.php">
									<select name="commande" OnChange="affiche_commande();">
										<option value="client">Client</option>
										<option value="fournisseur">Fournisseur</option>
									</select>
								</form>
								<span id="form_client" style="visibility:visible">
								     <?php include("commandes/client.php"); ?>
								</span>
								<span id="form_fournisseur" style="visibility:hidden; display:none">
								     <?php include("commandes/fournisseur.php"); ?>
								</span>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<b>Commandes</b>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script type="text/javascript">
			function affiche_commande() {
				//Client
				if (document.votre_commande.commande.selectedIndex == 0){
					document.getElementById('form_client').style.visibility = 'visible';
					document.getElementById("form_client").style.display="block";
				}

				else{
					document.getElementById('form_client').style.visibility = 'hidden';
					document.getElementById("form_client").style.display="none";
				}

				//Fournisseur
				if (document.votre_commande.commande.selectedIndex == 1){
					document.getElementById('form_fournisseur').style.visibility = 'visible';
					document.getElementById("form_fournisseur").style.display="block";
				}

				else{
					document.getElementById('form_fournisseur').style.visibility = 'hidden';
					document.getElementById("form_fournisseur").style.display="none";
				}
			}
			</script>
	</body>
</html>
