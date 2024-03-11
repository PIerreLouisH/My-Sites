<?php
require("index.php");

$laBase=new laBDD($hote, $user, $pass, $base);
$laBase->connexion();

?>

<html>
        <!--Chargement du CSS et du javascript pour le design -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8" />
    
        <link rel="stylesheet" type="text/css" href="Styles/responsiveform.css">
	<link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="Styles/responsiveform1.css">
	<link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="Styles/responsiveform2.css" >
	<link rel="stylesheet" media="screen and (max-width: 350px)" href="responsiveform3.css" >
        
        <br>
        <div id="envelope">
                    <header>
            <h2>Créer un nouveau mot</h2>
        </header>
    <form action="" method="post" class="form-style-10">

        
<input type="text" name="motFr" id="motFr" required="required" placeholder="Mot Français"/><br>
<input type="text" name="Prononciation" id="Prononciation" required="required" placeholder="Prononciation"/><br>
<input type="text" name="SigneChi" id="SigneChi" required="required" placeholder="Signe Chinois"/><br>
    <input type="submit" value="Valider"/>
</div>
</html>

<?php
if (isset($_POST['motFr']))
{
$motFr=$_POST['motFr'];
$Prononciation=$_POST['Prononciation'];
$SigneChi=$_POST['SigneChi'];

$sql = "INSERT INTO bibli(motFr,Prononciation,SigneChi) VALUES('" . $motFr . "','" . $Prononciation . "','" . $SigneChi . "')";
$result = $laBase->requete($sql);

echo "<script type=\"text/javascript\">
alert(\"Le mot '" . $motFr . "','" . $Prononciation . "','" . $SigneChi . "' a bien été créé.\") ;
window.location = \"creer.php\"
</script>";
}
?>