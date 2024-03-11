<html>
    <head>
        <link rel="stylesheet" href="../../assets/css/backoffice.css" type="text/css"
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

$sql = "SELECT * FROM lieu WHERE id= '". $_GET['id']. "' ";
$result= $laBase->requete($sql);

echo "<form action='../../controller/admin/modifLieu.php' method='post' class='form-style-10'><h1>Modifier le lieu</h1>";

echo '<input type="hidden" id="idLieu" name="idLieu" value="'.$_GET['id'].'" >';

echo '<input type="text" name="nomLieu" id="nomLieu" required="required" placeholder="Nom du lieu" value="'.$result[0][1].'"/><br>';

echo '<input type="text" name="adresseLieu" id="adresseLieu" required="required" placeholder="Adresse du lieu" value="'.$result[0][2].'"/><br>';
?>

<?php $instruction = $result[0][3]; ?>

<select id="typeLieu" name="typeLieu">
<option value="Restaurant" <?php if (!empty($instruction) && $instruction == 'Restaurant' ) echo 'selected = "selected"'; ?>>Restaurant</option>
<option value="Bar" <?php if (!empty($instruction) && $instruction == 'Bar')  echo 'selected = "selected"'; ?>>Bar</option>
<option value="Parc" <?php if (!empty($instruction) && $instruction == 'Parc')  echo 'selected = "selected"'; ?>>Parc</option>
<option value="Avenue" <?php if (!empty($instruction) && $instruction == 'Avenue')  echo 'selected = "selected"'; ?>>Avenue</option>
<option value="Rond-point" <?php if (!empty($instruction) && $instruction == 'Rond-point')  echo 'selected = "selected"'; ?>>Rond-point</option>
<option value="Magasin" <?php if (!empty($instruction) && $instruction == 'Magasin')  echo 'selected = "selected"'; ?>>Magasin</option>
<option value="Rue" <?php if (!empty($instruction) && $instruction == 'Rue')  echo 'selected = "selected"'; ?>>Rue</option>
<option value="Place" <?php if (!empty($instruction) && $instruction == 'Place')  echo 'selected = "selected"'; ?>>Place</option>
<option value="Théâtre" <?php if (!empty($instruction) && $instruction == 'Théâtre')  echo 'selected = "selected"'; ?>>Théâtre</option>
<option value="Cinéma" <?php if (!empty($instruction) && $instruction == 'Cinéma')  echo 'selected = "selected"'; ?>>Cinéma</option>
<option value="Musée" <?php if (!empty($instruction) && $instruction == 'Musée')  echo 'selected = "selected"'; ?>>Musée</option>
</select><br>

<?php
echo '<input type="submit" id="modifLieu" name="modifLieu" value="Modifier le lieu">';

echo "</form>";

?>
