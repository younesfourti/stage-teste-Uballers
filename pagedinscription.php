<!DOCTYPE html>
<html>

<head>
	<title> stage</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS\inscription.css" />
</head>


<body>
	<div align="center">
	
		<form class='boxin' action='VIRIV.php' method='post'>
			<!-- <p>la classe boxin est dans le fichier inscription ligne  1 </p> -->
			<table>
				<h1>Inscription</h1>
				<p class="textedegratui">C'est gratuit (et ça le restera toujours)</p>
				<tr>
					<td>
						<label for="nom">
						</label>
					</td>
					<td>
						<input class="formedenom" type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php if (isset($nom)) {echo $nom;} ?>" />
                                 <!-- <p>la classe formedenom est dans le fichier inscription ligne  10 </p> -->
						<label for="prenom">
						</label>
						<input class="formedeprenom" type="text" placeholder="Votre prenom" id="prenom" name="prenom" value="<?php if (isset($prenom)) {echo $prenom;} ?>" />
						            <!-- <p>la classe formedeprenom est dans le fichier inscription a la suit de formedenom </p> -->
					</td>
				</tr>
				<tr>
					<td>
						<label for="mail">
						</label>
					</td>
					<td>
						<input class="formedemail" type="text" placeholder="Votre mail" id="mail" name="mail" value="<?php if (isset($mail)) {echo $mail;} ?>" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="mdp">
						</label>
					</td>
					<td>
						<input class="formedemotdepasse" type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
					</td>
				</tr>
				<tr>
					<td align="right">
					<td>
						<h2>Date de naissance</h2>
						<input class="date" type="number" name="Jour" id = "jour"placeholder="Jour" required="required">
						<input class="date" type="number" name="Mois" id="mois" placeholder="Mois" required="required">
						<input class="date" type="number" name="Annee" id="annee" placeholder="Année" required="required">
						<a class="mescondi">Pourquoi indiquer ma date de naissance?</a></br>
						<br>
						<input type="radio" value="1" id="1" name="homme">
						<label class="" for="1">Homme</label>
						<input type="radio" value="2" id="2" name="homme">
						<label class="" for="1">Femme</label>
					</td>
				</tr>
				<tr>
					<td>
					<td>
						<br>
						<input class = "boutantinsci" type="submit" value="Je m'inscris" name="forminscription">
						<p >En cliquant sur Inscription, vous acceptez nos <a href="https://www.google.fr/" id=" " target="" rel="">Conditions générales</a>. Découvrez comment nous recueillons, utilisons et partageons vos données en lisant notre <a href="https://www.google.fr/" id="" target="" rel="">Politique d’utilisation des données</a> et comment nous utilisons les cookies et autres technologies similaires en consultant notre <a href="https://www.google.fr/" id="" target="" rel="">Politique d’utilisation des cookies</a>. Vous recevrez peut-être des notifications par texto de notre part et vous pouvez à tout moment vous désabonner.</p>
					</td>
				</tr>
			</table>
		</form>
		<?php
		if (isset($erreur)) {
			echo '<font color="red">' . $erreur . "</font>";
		}
		?>
		
	</div>
</body>

</html>