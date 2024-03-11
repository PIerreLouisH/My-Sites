<?php
require("../laBDD.php");
require("../parametres.php");

$laBase=new laBDD($hote, $user, $pass, $base);
$laBase->connexion();

    if(!isset($_SESSION))
    {
    session_start();
    }

    if (!isset ($_SESSION['ok']))
    {
    header("Location:../../index.php");
    }

    $nomLieu = addslashes($_POST['nomLieu']);
    $adresseLieu = addslashes($_POST['adresseLieu']);
    $sqlLieu= ("INSERT INTO lieu (nom,adresse,type) VALUES ('".$nomLieu."', '".$adresseLieu."', '".$_POST['typeLieu']."')");
    $result= $laBase->requete($sqlLieu);
    echo '<script type="text/javascript">alert("Votre lieu a été crée nous vous remercions d\'utiliser aix ectera");</script>';
    echo "<script type='text/javascript'>document.location.replace('../../views/admin/gestion.php');</script>";
?>