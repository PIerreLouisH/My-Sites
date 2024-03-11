<html>
    <head>
        <link rel="stylesheet" href="../../assets/css/backoffice.css" type="text/css">
    </head>
</html>
<?php
require_once '../include/headerback.php';
require("../../controller/laBDD.php");
require("../../controller/parametres.php");

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
 
$sql="SELECT evènement.id, evènement.nom, lieu.nom, texte, dateDebut, dateFin, id_lieu FROM evènement INNER JOIN lieu WHERE evènement.id_lieu=lieu.id AND evènement.id= '". $_GET['id']. "' ";
$result =  $laBase->requete($sql);

echo "<form form enctype='multipart/form-data' action='../../controller/admin/modifEv.php' method='post' class='form-style-10'><h1>Modifier l'évènement</h1>";
echo '<input type="hidden" id="idEv" name="idEv" value="'.$_GET['id'].'" >';
echo '<input type="text" id="nomEv" name="nomEv" required="required" placeholder="Nom de l\'évènement" value="'.$result[0][1].'"/><br>';

$sqlAdresse="SELECT id, nom FROM lieu WHERE id= '". $result[0][6]. "' ";
//echo $sqlAdresse;
$resultAdresse=$laBase->requete($sqlAdresse);
$sqlAdrs="SELECT id, nom FROM lieu WHERE NOT id= '". $result[0][6]. "' ";
$resultAdrs=$laBase->requete($sqlAdrs);
echo '<select name="adresse">';
foreach($resultAdresse as $uneAdrs) {
    echo '<option value='.$uneAdrs[0].' selected>'.$uneAdrs[1].'</option>';
}

foreach ($resultAdrs as $unAdrs) {
    echo '<option value='.$unAdrs[0].'>'.$unAdrs[1].'</option>';
}
echo '</select>';

echo'<br>';
echo '<div class="lol">';
echo '<input type="text" id="texteEv" name="texteEv" required="required" placeholder="Description de l\'évènement" value="'.$result[0][3].'" /><br>';
echo "</div>";
echo '<input type="date" id="debutEv" name="debutEv" required="required" placeholder="Debut de l\'évènement"value="'.$result[0][4].'"/><br>';

echo '<input type="date" id="finEv" name="finEv" required="required" placeholder="Fin de l\'évènement" value="'.$result[0][5].'"/><br>';

echo '<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />';


$filename='../../assets/imagesEv/Ev'.$result[0][0].'.jpg';

            if (file_exists($filename))
        {
            echo '<img alt="évènement" class="imgback" src="'.$filename.'"/>'; 
            echo '<br>';
            echo '<input type="checkbox" id="supprimer" name="supprimer" value="supprimer">Supprimer l\'image (et remettre celle par défaut)<br>';
        }
        else {
         echo '<img alt="bar1" class="imgback" src="../../assets/images/event/event1.jpg"/>';   
        }

echo '<input type="file" id="photo" name="photo" accept="image/png, image/jpeg">';
?>

<script>
	document.getElementById('supprimer').onchange = function() {
    document.getElementById('photo').disabled = this.checked;
};
</script>


<br><br>

<input type='submit' name='modifEv' value="Modifier l'évènement"/>
</form>