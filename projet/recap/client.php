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
						<h2>RECAPITULATIF</h2>
					</header>
				</div>
			</section>

		<!-- Main -->
		<div id="main" class="container">
				<a href="client.php">CLIENTS</a>
                <?php include_once("../scripts/getClient.php")?>
		</div>

		<!-- Footer -->
			<footer id="footer">
				<b>RECAPITULATIF</b>
			</footer>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>
