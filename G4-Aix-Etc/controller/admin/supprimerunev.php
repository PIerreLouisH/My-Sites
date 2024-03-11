<?php
    if(!isset($_SESSION))
    {
    session_start();
    }

    if (!isset ($_SESSION['ok']))
    {
    header("Location:../../index.php");
    }

require("../laBDD.php");
require("../parametres.php");

$laBase=new laBDD($hote, $user, $pass, $base);
$laBase->connexion();

$sql = " DELETE FROM evènement WHERE id='" . $_GET['id']. "';";
$result = $laBase->requete($sql);

//echo $sql;
header ("Location: ../../views/admin/gestion.php");

?>
