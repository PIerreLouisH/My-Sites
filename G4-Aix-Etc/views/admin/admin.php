<?php
if(!isset($_SESSION))
{
    session_start();
}

require("../../controller/laBDD.php");
require("../../controller/parametres.php");

$laBase=new laBDD($hote, $user, $pass, $base);
$laBase->connexion();

?>
<link rel="stylesheet" href="../../assets/css/backoffice.css" type="text/css" media="screen" />
<html>

    <form action="../../controller/login.php"  method="post" class='form-style-10' >
          <h1>Formulaire de connexion</h1>
        <br>
        <input type="text" id= "login" name="login" required="required" placeholder="Nom d'utilisateur"/><br>
        <input type="password" id="pass" name="pass" required="required" placeholder="Mot de passe"/><br>
        <input type="submit" id="submit" value="Connexion"></form>


</html>