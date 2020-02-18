<?php

if(count($_POST))
{   
    $identifiant = $_POST['mail'];
    $password = $_POST['motdepasse'];

    $conee = new PDO('mysql:host=localhost;dbname=stageteste', 'root', '');
    
    $sql = "SELECT * FROM membre where mail = '$identifiant' and motdepasse = '$password'";
    $result = $conee->query($sql);
    
    $row = $result->fetch();
    if (!empty($identifiant) && !empty($password))
    {
        if ($row['mail'] == $identifiant && $row['motdepasse'] == $password)
        {
           echo "Bienvenue " . $identifiant ."! ton mot de passe est  ".$password;
           session_start();
           $_SESSION['id']=$row['ID'];
        }
        else
        {
        echo "Identifiant ou mot de passe incorrect.";
        }
    }
    else
    {
        echo"rien marchee";
    }
}
?>
?>