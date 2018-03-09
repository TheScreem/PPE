<!DOCTYPE HTML>
<html>
	<body>
                            <form name="votre_article" method="post" action="../actionCC.php">
                                <h2>Commande Client</h2>
									<p>
									<label for="nature">Nature</label>
									</p>
									<p>
										<select name="nature" OnChange="affiche_qte();">
											<option value="Harnais de ski (caution)">Harnais de ski (caution)</option>
											<option value="Harnais de ski (location)">Harnais de ski (location)</option>
											<option value="Harnais de ski (amazon)">Harnais de ski (amazon)</option>
											<option value="Harnais de ski (directe)">Harnais de ski (directe)</option>
											<option value="Harnais de ski (esyski)">Harnais de ski (esyski)</option>
											<option value="Harnais de ski (magasin)">Harnais de ski (magasin)</option>
											<option value="Harnais de ski (remboursement)">Harnais de ski (remboursement)</option>
											<option value="hs+Harnais de ski + Tryski (amazon)">Harnais de ski + Tryski(amazon)</option>
											<option value="hs+Harnais de ski + Tryski (directe)">Harnais de ski + Tryski(directe)</option>
											<option value="hs+Harnais de ski + Tryski (esyski)">Harnais de ski + Tryski(esyski)</option>
											<option value="Tryski (amazon)">Tryski(amazon)</option>
											<option value="Tryski (directe)">Tryski(directe)</option>
											<option value="Tryski (esyski)">Tryski(esyski)</option>
										</select>
									</p>
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

									<h2>Facturation</h2>
                                <p>
                                    <label for="dateFAC">Date de la facture</label>  <input type="date" name="dateFAC" id="dateFAC" />
                                </p>
								<label for="payeFAC">Termes de reglement</label>
								<p>
									<select name="termeRegFAC" id="termeRegFAC">
										<option value="Comptant">Comptant</option>
										<option value="Crédit">Crédit</option>
										<option value="30 jours net">30 jours net</option>
										<option value="30 jours fin de mois">30 jours fin de mois</option>
										<option value="45 jours fin de mois">45 jours fin de mois</option>
										<option value="45 jours net">45 jours net</option>
										<option value="Fin de mois 30 jours">Fin de mois 30 jours</option>
										<option value="Fin de mois 45 jours">Fin de mois 45 jours</option>
									</select>
								</p>
                                <p>
                                    <label for="echeanceFAC">Echéance</label>  <input type="date" name="echeanceFAC" id="echeanceFAC" />
                                </p>
									<label for="modeReglFAC">Mode de règlement de la facture</label>
								<p>
									<select name="modeReglFAC" id="modeReglFAC">
										<option value="CB">CB</option>
										<option value="Avoir">Avoir</option>
										<option value="Chèque">Chèque</option>
										<option value="Espèce">Espèce</option>
										<option value="Paypal">Paypal</option>
										<option value="PlayPlug">PlayPlug</option>
										<option value="Prélèvement">Prélèvement</option>
										<option value="Traite">Traite</option>
										<option value="Virement">Virement</option>
									</select>
								</p>
                                <p>
                                    <label for="mtFAC">Montant de la Facture sans Frais de port</label>  <input type="text" name="mtFAC" id="mtFAC" />
                                </p>
                                <p>
                                    <label for="fpFAC">Frais de port</label>  <input type="text" name="fpFAC" id="fpFAC" />
                                </p>
								<span id="form_HS" style="visibility:visible; display:block">
									<p>
										<label for="qteHS">Quantité de Harnais</label>  <input type="number" name="qteHS" id="qte" min="1"/>
									</p>
								</span>
								<span id="form_TS" style="visibility:hidden; display:none">
									<p>
										<label for="qteTS">Quantité de Tryski</label>  <input type="number" name="qteTS" id="qte" min="1"/>
									</p>
								</span>

								<p>
                                    <label for="blFAC">Bon de Livraison</label>  <input type="text" name="blFAC" id="blFAC" />
                                </p>
                                <input type="submit" value="Envoyer" />
                            </form>
	</body>
	<script type="text/javascript">
	function affiche_qte() {
		//Harnais
		if (document.votre_article.nature.selectedIndex == 0  document.votre_article.nature.selectedIndex == 1 ||document.votre_article.nature.selectedIndex == 2 || document.votre_article.nature.selectedIndex == 3||document.votre_article.nature.selectedIndex == 4 || document.votre_article.nature.selectedIndex == 5||document.votre_article.nature.selectedIndex == 6){
			document.getElementById('form_HS').style.visibility = 'visible';
			document.getElementById("form_HS").style.display="block";
		}

		else {
			document.getElementById('form_HS').style.visibility = 'hidden';
			document.getElementById("form_HS").style.display="none";
		}

		//Tryski
		if (document.votre_article.nature.selectedIndex == 10 || document.votre_article.nature.selectedIndex == 11 ||document.votre_article.nature.selectedIndex == 12){
			document.getElementById('form_TS').style.visibility = 'visible';
			document.getElementById("form_TS").style.display="block";
		}

		else {
			document.getElementById('form_TS').style.visibility = 'hidden';
			document.getElementById("form_TS").style.display="none";
		}

		//Tryski + Harnais
		if (document.votre_article.nature.selectedIndex == 7 || document.votre_article.nature.selectedIndex == 8 ||document.votre_article.nature.selectedIndex == 9){
			document.getElementById('form_TS').style.visibility = 'visible';
			document.getElementById("form_TS").style.display="block";

			document.getElementById('form_HS').style.visibility = 'visible';
			document.getElementById("form_HS").style.display="block";
		}

		else {
			document.getElementById('form_TS').style.visibility = 'hidden';
			document.getElementById("form_TS").style.display="none";

			document.getElementById('form_HS').style.visibility = 'hidden';
			document.getElementById("form_HS").style.display="none";
		}

	}
	</script>

</html>
