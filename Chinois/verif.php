<?php
require("index.php");

$laBase=new laBDD($hote, $user, $pass, $base);
$laBase->connexion();

    if (($_POST['motFr']==$_POST['motFrVerif']) && ($_POST['Prononciation']==$_POST['PrononciationVerif']))
    {
        echo ' <b>Bonne réponse ! </b>';
        echo '<br>';
        echo '<img src="https://www.123-stickers.com/2074-2099-large/Array.jpg">';
    }
    
    else {
        
        echo '<br>  <b>Perdu! La bonne réponse: </b> <br>'
        . 'Le bon mot : <b>' . $_POST['motFrVerif'] . '</b>' . ' <br> La bonne Prononciation: '. ' <b>' . $_POST['PrononciationVerif'].'</b>';
        
    }
    
    
