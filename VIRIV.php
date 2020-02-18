<?php
var_dump ($_POST['nom']);
var_dump ($_POST['prenom']);
var_dump ($_POST['Jour']);
var_dump ($_POST['Mois']);
var_dump ($_POST['Annee']);
var_dump ($_POST['mdp']);
// on affiche tout pur verifier si ca marche 
$bdd = new PDO('mysql:host=localhost;dbname=stageteste', 'root', '');// se connecter a la base 

if (isset($_POST['forminscription'])) {

	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$mail = htmlspecialchars($_POST['mail']);
	$mdp = ($_POST['mdp']);
	$jour = ($_POST['Jour']);
	$mois = ($_POST['Mois']);
	$annee = ($_POST['Annee']);


if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['Jour'])AND !empty($_POST['Mois'])AND !empty($_POST['Annee']))
{
echo ("ton nom c est ".$nom);// teste a sup 
    $nomlength = strlen($nom);
    $prenomlength = strlen($prenom);
    if($nomlength <= 20)
    {
        if($prenomlength <= 20)
        {
            echo("prenomlenght= ".$prenomlength);// teste a sup 
            if(filter_var($mail,FILTER_VALIDATE_EMAIL))
            {
                $reqmail = $bdd->prepare("SELECT * FROM membre WHERE mail = ?");
                $reqmail-> execute(array($mail));// si le mail est deja pris 
                $mailexist = $reqmail->rowCount();
                if($mailexist == 0)
                {
                    echo("lemail=".$mailexist);
                    
                        $insertmbr = $bdd ->prepare("INSERT INTO `membre` (`prenom`, `nom`, `mail`, `motdepasse`, `sex`) VALUES
                        ('$prenom', '$nom', '$mail', '$mdp', '');");//on prepare le sql 
                        $insertmbr->execute(array($nom, $prenom, $mail, $mdp));// on execute 
                        $erreur = "Votre compte a bien été créer";	
                        var_dump($erreur);// si tout va bien ca s affiche 
                   
                   
                }
                else
                {
                    $erreur = "Adresse mail déja utilisé";
                    var_dump($erreur);
                }
            }
            else
            {
                $erreur = "Votre email est invalide";
                var_dump($erreur);
            }
        
        }
        else
        {
            $erreur = " Votre prenom ne doit pas dépasser 255 caractères !";
            var_dump($erreur);
        }
    }
    else
    {
        $erreur = " Votre nom ne doit pas dépasser 255 caractères !";
        var_dump($erreur);
    }

}
else
{
    $erreur = "Tous les champs doivent etre completer";
    var_dump($erreur);
}
}
?>
<video controls loop>
  <source src="video\video.mp4" type="video/mp4">
</video>

