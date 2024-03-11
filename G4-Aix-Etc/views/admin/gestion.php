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

?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../assets/css/backoffice.css" type="text/css" media="screen" />
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready( function () {

    $('table.display').DataTable( {
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/French.json'
        },
    } );

} );
</script>
<!--
<button name="ajoutLieu" type="submit" value="submit-true">Ajouter un lieu</button>
<button name="ajoutEv" type="submit" value="submit-true">Ajouter un évènement</button>
-->
<?php
echo "<table id='' class='display' >";
echo "<thead>";
echo "<tr>";
echo "<th>Nom de l'évènement</th>";
echo "<th>Adresse de l'évènement</th>";
echo "<th>Description de l'évènement</th>";
echo "<th>Date début de l'évènement</th>";
echo "<th>Date fin de l'évènement</th>";
echo "<th></th>";
echo "<th></th>";
echo '</tr>';
echo '</thead>';
echo '<tbody>';

$sqlEv="SELECT evènement.id, evènement.nom, lieu.nom, texte, dateDebut, dateFIn FROM evènement INNER JOIN lieu WHERE evènement.id_lieu=lieu.id";
$resultEv= $laBase->requete($sqlEv);
//echo $sqlEv
foreach ($resultEv as $unEv) {
  echo '<tr>';
  echo '<td style="text-align:center;">' . $unEv[1] . '</td>';
  echo '<td style="text-align:center;">' . $unEv[2] . '</td>';
  echo '<td style="text-align:center;">' . $unEv[3] . '</td>';
  echo '<td style="text-align:center;">' . $unEv[4] . '</td>';
  echo '<td style="text-align:center;">' . $unEv[5] . '</td>';
  echo '<td style="text-align:center"><a href="modifEv.php?id=' . $unEv[0] . '" class="btnAction">modifier</a></td>';
  echo '<td style="text-align:center"><a href="../../controller/admin/supprimerunev.php?id=' . $unEv[0] . '" onclick="return(confirm(\'Confirmer la suppression\'))" class="btnAction">supprimer</a></td>';
  echo '</tr>';
                            }

echo '</tbody>';
echo '</table>';
?>

<form form enctype="multipart/form-data" method='post' class='form-style-10' action='../../controller/admin/ajouterEv.php'><h1>Ajouter un évènement</h1>
   <input type="text" id="nomEv" name="nomEv" required="required" placeholder="Nom de l'évènement"/><br>
            <select id="adresseEv" name="adresseEv"/>
    <?php
    $requeteAdrs = "SELECT id, nom FROM lieu";
    $resultAdrs = $laBase->requete($requeteAdrs);
    foreach ($resultAdrs as $uneAdrs)
    {
        echo '<option value="'.$uneAdrs[0].'">'.$uneAdrs[1].'</option>';
    }
    echo '</select>';
    ?>

    <br><input type="text" id="texteEv" name="texteEv" required="required" placeholder="Description de l'évènement"/><br>
    <input type="date" id="debutEv" name="debutEv" required="required" placeholder="Debut de l'évènement"/><br>
    <input type="date" id="finEv" name="finEv" required="required" placeholder="Fin de l'évènement"/><br>
      <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
        <input type="file" name="photo" accept="image/png, image/jpeg">
       <br><br>
    <input type='submit' name='ajouterEv' value="Ajouter l'évènement"/>
        </form>

<?php

echo "<table id='' class='display'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nom du lieu</th>";
echo "<th>adresse du lieu</th>";
echo "<th>Type de Lieu</th>";
echo "<th></th>";
echo "<th></th>";
echo '</tr>';
echo '</thead>';

echo '<tbody>';

$sqlLieu="SELECT * FROM lieu";
$resultLieu= $laBase->requete($sqlLieu);
foreach ($resultLieu as $unLieu) {
  echo '<tr>';
  echo '<td style="text-align:center;">' . $unLieu[1] . '</td>';
  echo '<td style="text-align:center;">' . $unLieu[2] . '</td>';
  echo '<td style="text-align:center;">' . $unLieu[3] . '</td>';
  echo '<td style="text-align:center"><a href="modifLieu.php?id=' . $unLieu[0] . '" class="btnAction">modifier</a></td></td>';
  echo '<td style="text-align:center"><a href="../../controller/admin/supprimerunlieu.php?id=' . $unLieu[0] . '" onclick="return(confirm(\'Confirmer la suppression\'))" class="btnAction">supprimer</a></td></td>';
  echo '</tr>';
                                }

echo '</tbody>';
echo '</table>';

?>
          <form action='../../controller/admin/ajouterLieu.php' method='post' class='form-style-10'><h1>Ajouter un lieu</h1>
    <input type="text" name="nomLieu" id="nomLieu" required="required" placeholder="Nom du lieu"/><br>
    <input type="text" name="adresseLieu" id="adresseLieu" required="required" placeholder="Adresse du lieu"/><br>
    <select name="typeLieu" id="typeLieu">
    <option value="Restaurant">Restaurant</option>
    <option value="Bar">Bar</option>
    <option value="Parc">Parc</option>
    <option value="Avenue">Avenue</option>
    <option value="Rond-point">Rond-point</option>
    <option value="Magasin">Magasin</option>
    <option value="Rue">Rue</option>
    <option value="Place">Place</option>
    <option value="Théâtre">Théâtre</option>
    <option value="Cinéma">Cinéma</option>
    <option value="Musée">Musée</option>
    </select><br>
    <input type='submit' id='ajouterLieu' name='ajouterLieu' value="Ajouter le lieu"/>
        </form>
</html>