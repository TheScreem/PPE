<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<body>
                                <h2>Commande Fournisseur</h2>
								<form name="votre_fournisseur" method="post" action="commande.php">
									<p>
									<label for="nature">Nature</label>
									</p>
									<p>
										<select name="nature" OnChange="affiche_nature();">
											<option value="Assurance">Assurance</option>
											<option value="Broderie">Broderie</option>
											<option value="Emballage">Emballage</option>
											<option value="Harnais de ski (achat)">Harnais de ski (achat)</option>
											<option value="INPI">INPI</option>
											<option value="Papeterie">Papeterie</option>
											<option value="Portable Free">Portable Free</option>
											<option value="Site internet">Site internet</option>
											<option value="Tryski">Tryski</option>
										</select>
									</p>
									<span id="form_assurance" style="visibility:visible">
										<p>
										<label for="assurance">Assurance</label>
										</p>
										<p>
											<select name="assurance">
												<option value="LA BANQUE POSTALE">LA BANQUE POSTALE</option>
											</select>
										</p>
									</span>

									<span id="form_broderie" style="visibility:hidden; display:none">
										<p>
										<label for="broderie">Broderie</label>
										</p>
										<p>
											<select name="broderie">
												<option value="BRODBOX">BRODBOX</option>
											</select>
										</p>
									</span>

									<span id="form_emballage" style="visibility:hidden; display:none">
										<p>
										<label for="emballage">Emballage</label>
										</p>
										<p>
											<select name="emballage">
												<option value="EMBALEO">EMBALEO</option>
												<option value="PACK DISCOUNT">PACK DISCOUNT</option>
											</select>
										</p>
									</span>

									<span id="form_hs(achat)" style="visibility:hidden; display:none">
										<p>
										<label for="hs(achat)">Harnais (achat)</label>
										</p>
										<p>
											<select name="hs(achat)">
												<option value="PMS INDUSTRIE">PMS INDUSTRIE</option>
											</select>
										</p>
									</span>

									<span id="form_inpi" style="visibility:hidden; display:none">
										<p>
										<label for="inpi">INPI</label>
										</p>
										<p>
											<select name="inpi">
												<option value="INPI">INPI</option>
											</select>
										</p>
									</span>

									<span id="form_papeterie" style="visibility:hidden; display:none">
										<p>
										<label for="papeterie">Papeterie</label>
										</p>
										<p>
											<select name="papeterie">
												<option value="BUREAU VALEE">BUREAU VALEE</option>
												<option value="AMAZON">AMAZON</option>
												<option value="CASTORAMA">CASTORAMA</option>
											</select>
										</p>
									</span>

									<span id="form_portable_free" style="visibility:hidden; display:none">
										<p>
										<label for="portable_free">Portable Free</label>
										</p>
										<p>
											<select name="portable_free">
												<option value="FREE MOBILE">FREE MOBILE</option>
											</select>
										</p>
									</span>

									<span id="form_site" style="visibility:hidden; display:none">
										<p>
										<label for="site">Site internet</label>
										</p>
										<p>
											<select name="site">
												<option value="AMEN">AMEN</option>
												<option value="E-MONSITE">E-MONSITE</option>
												<option value="ALPHATRAD">ALPHATRAD</option>
											</select>
										</p>
									</span>

									<span id="form_tryski" style="visibility:hidden; display:none">
										<p>
										<label for="tryski">Tryski</label>
										</p>
										<p>
											<select name="tryski">
												<option value="TECHNO SYNTHETIC">TECHNO SYNTHETIC</option>
											</select>
										</p>
									</span>
                                <p>
                                    <label for="dateFACA">Date de la facture</label>  <input type="date" name="dateFACA" id="dateFACA"/>
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
                                    <label for="mtFACA">Montant</label>  <input type="float" name="mtFACA" id="mtFACA"/>
                                </p>
                                <p>
                                    <label for="qteACH">Quantité d'article(s)</label>  <input type="number" name="qteACH" id="qteACH" min="1"/>
                                </p>
                                <input type="submit" value="Envoyer" />
                            </form>
	</body>
								<script type="text/javascript">

								function affiche_nature() {
									//Assurance
									if (document.votre_fournisseur.nature.selectedIndex == 0){
										document.getElementById('form_assurance').style.visibility = 'visible';
										document.getElementById("form_assurance").style.display="block";
									}

									else {
										document.getElementById('form_assurance').style.visibility = 'hidden';
										document.getElementById("form_assurance").style.display="none";
									}
									//Broderie
									if (document.votre_fournisseur.nature.selectedIndex == 1){
										document.getElementById('form_broderie').style.visibility = 'visible';
										document.getElementById("form_broderie").style.display="block";
									}

									else {
										document.getElementById('form_broderie').style.visibility = 'hidden';
										document.getElementById("form_broderie").style.display="none";
									}
									//Emballage
									if (document.votre_fournisseur.nature.selectedIndex == 2){
										document.getElementById('form_emballage').style.visibility = 'visible';
										document.getElementById("form_emballage").style.display="block";
									}

									else {
										document.getElementById('form_emballage').style.visibility = 'hidden';
										document.getElementById("form_emballage").style.display="none";
									}
									//Harnais de ski (achat)
									if (document.votre_fournisseur.nature.selectedIndex == 3){
										document.getElementById('form_hs(achat)').style.visibility = 'visible';
										document.getElementById("form_hs(achat)").style.display="block";
									}

									else {
										document.getElementById('form_hs(achat)').style.visibility = 'hidden';
										document.getElementById("form_hs(achat)").style.display="none";
									}
									//INPI
									if (document.votre_fournisseur.nature.selectedIndex == 4){
										document.getElementById('form_inpi').style.visibility = 'visible';
										document.getElementById("form_inpi").style.display="block";
									}

									else {
										document.getElementById('form_inpi').style.visibility = 'hidden';
										document.getElementById("form_inpi").style.display="none";
									}

									//Papeterie
									if (document.votre_fournisseur.nature.selectedIndex == 5){
										document.getElementById('form_papeterie').style.visibility = 'visible';
										document.getElementById("form_papeterie").style.display="block";
									}

									else {
										document.getElementById('form_papeterie').style.visibility = 'hidden';
										document.getElementById("form_papeterie").style.display="none";
									}

									//Portable Free
									if (document.votre_fournisseur.nature.selectedIndex == 6){
										document.getElementById('form_portable_free').style.visibility = 'visible';
										document.getElementById("form_portable_free").style.display="block";
									}

									else {
										document.getElementById('form_portable_free').style.visibility = 'hidden';
										document.getElementById("form_portable_free").style.display="none";
									}

									//Site
									if (document.votre_fournisseur.nature.selectedIndex == 7){
										document.getElementById('form_site').style.visibility = 'visible';
										document.getElementById("form_site").style.display="block";
									}

									else {
										document.getElementById('form_site').style.visibility = 'hidden';
										document.getElementById("form_site").style.display="none";
									}

									//Tryski
									if (document.votre_fournisseur.nature.selectedIndex == 8){
										document.getElementById('form_tryski').style.visibility = 'visible';
										document.getElementById("form_tryski").style.display="block";
									}

									else {
										document.getElementById('form_tryski').style.visibility = 'hidden';
										document.getElementById("form_tryski").style.display="none";
									}
								}
							</script>
</html>
