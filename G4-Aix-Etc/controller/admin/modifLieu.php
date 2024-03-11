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
    
  if (isset($_POST['modifLieu']))
  {
    $nom = addslashes($_POST['nomLieu']);
    $adresse = addslashes($_POST['adresseLieu']);
    $type = addslashes($_POST['typeLieu']);
    $sql= ("UPDATE lieu SET nom='".$nom."', adresse='".$adresse."', type='".$type."' WHERE id='".$_POST['idLieu']. "' ");
    $result= $laBase->requete($sql);
    //echo $sql;
    echo "<script type='text/javascript'>document.location.replace('../../views/admin/gestion.php');</script>";
  }
  
  else {
      echo "<script type='text/javascript'>document.location.replace('../../views/admin/gestion.php');</script>";
  }
  ?>