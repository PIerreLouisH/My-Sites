<?php

require("laBDD.php");
require("Parametres.php");

$laBase=new laBDD($hote, $user, $pass, $base);
$laBase->connexion();

$sql = " DELETE FROM bibli "
        . "WHERE numBibli='". $_GET['numBibli']. "';";

$result = $laBase->requete($sql);

//echo $sql;
header ("Location: liste.php");