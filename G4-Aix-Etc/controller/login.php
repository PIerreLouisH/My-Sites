<?php

if(!isset($_SESSION))
{
    session_start();
}
require("laBDD.php");
require("parametres.php");

$laBase=new laBDD($hote, $user, $pass, $base);
$laBase->connexion();


if (!isset ($_POST['login']))
{
header ('location: ../index.php');
}

if (isset ($_POST['login']))
{

    $unMdp = 0;
    $unUtilisateur = 0;
    
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $sql = "SELECT utilisateur FROM login WHERE utilisateur LIKE '$login'";
    $utilisateur = $laBase->requete($sql); 
    
    foreach ($utilisateur as $unUtilisateur)
    {
        $unUtilisateur[0]; 
    }
    // la boucle a l'aide du tableau permet de convertir l'array en String

    $sql = "SELECT mdp FROM login WHERE utilisateur LIKE '$login' AND mdp LIKE '$pass'";
    $mdp = $laBase->requete($sql);

    foreach ($mdp as $unMdp)
    {
        $unMdp[0];
    }

    if (($_POST['login'] == $unUtilisateur[0]))
    {
        if ($_POST['pass'] == $unMdp[0])
        {
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $pass;
            $_SESSION['ok']=true;
            header ('location: ../views/admin/gestion.php');
        }

        else
        {
            echo "<h3>Mot de passe incorrect.</h3>";
            echo "<a href=\"admin.php\">Reassayer";
        }
    }

    else
    {
        echo "<h3>Nom d'utilisateur incorrect</h3>";
        echo "<a href=\"login.php\">Reassayer";
    }
}
