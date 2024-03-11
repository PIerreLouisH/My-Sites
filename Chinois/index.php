    <?php
require("laBDD.php");
require("Parametres.php");

$laBase=new laBDD($hote, $user, $pass, $base);
$laBase->connexion();
?>

<html><head>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
        <link href="Styles/sm-core-css.css" rel="stylesheet" type="text/css" >
        <link href="Styles/sm-blue.css" rel="stylesheet" type="text/css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
        <script src="Scripts/jquery.smartmenus.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function() {
		$('#main-menu').smartmenus({
			subMenusSubOffsetX: 1,
			subMenusSubOffsetY: -8
		});
	});
</script>
            <!--Chargement du CSS et du javascript pour le design -->
            
        <nav id="main-nav" role="navigation">
<ul id="main-menu" class="sm sm-blue">
<li><a href="liste.php">Liste des mots</a></li>
<li><a href="creer.php">Creer un mot</a></li>
<li><a href="reviser.php">Reviser</a></li>
<li><a href="importer.php">Importation</a></li>
</ul>
            
</nav>
    </head>

    

</html>



