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
            <link rel="stylesheet" href="Styles/select.css">
	<link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="Styles/responsiveform1.css">
	<link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="Styles/responsiveform2.css" >
	<link rel="stylesheet" media="screen and (max-width: 350px)" href="responsiveform3.css" >
         <link rel="stylesheet" type="text/css" href="Styles/select.css">
         <script src="Scripts/select.js"></script>
    <br>
    
    <div id="envelope">
        <header>
         <h2>Trouver la bonne association</h2>   
        </header>
        
    <form action="verif.php" method="post" >
    </html>   
    <?php
    
    $sqlSC= "SELECT numBibli, SigneChi, motFr, Prononciation  FROM bibli ORDER BY RAND( ) LIMIT 1";
    $resultSC = $laBase->requete($sqlSC);    
    
    $sql= '(SELECT motFr FROM bibli WHERE numBibli='.$resultSC[0][0].' )'
            . 'UNION '
            . '(SELECT motFr FROM bibli ORDER BY RAND() LIMIT 8) '
            . 'ORDER BY RAND()';
    
    $sql2= '(SELECT Prononciation FROM bibli WHERE numBibli='.$resultSC[0][0].' )'
            . 'UNION '
            . '(SELECT Prononciation FROM bibli ORDER BY RAND() LIMIT 8)'
            . ' ORDER BY RAND()';
    
    //echo $sql;
    $result = $laBase->requete($sql); 
    $result2 = $laBase->requete($sql2); 
    
    //echo '<SELECT name="SigneChi">';
    
    echo '<label>Signe</label> <br>';
    echo '<font size="6">'.$resultSC[0][1].'</FONT> <br><br>';
    //echo '</SELECT>';
    
    
    echo '<label>Mot Français</label> <br>';
     echo '<SELECT name="nomFr" id="nomFr">';
     
      foreach ($result as $unResult)
    {
     echo '<OPTION value="'.$unResult[0].'">'.$unResult[0].'</option>';
    }
    
     echo '</SELECT>';
     echo '<br> <br> <label>Prononciation</label>  <br>';
     
     echo '<SELECT id="Prononciation" name="Prononciation">';
     
      foreach ($result2 as $unResult2)
    {
     echo '<OPTION value="'.$unResult2[0].'">'.$unResult2[0] . '</option>';
    }   
    echo '</SELECT>';
    
    echo '<input id="motFrVerif" name="motFrVerif" type="hidden" value=' .$resultSC[0][2].'>';
    echo '<input id="PrononciationVerif" name="PrononciationVerif" type="hidden" value=' .$resultSC[0][3].'>';
    echo '<br>';
    echo '<br>';
     
     echo '<input type="submit" name="valider" value="Valider"/>';
      
     //echo ''. $resultSC[0][2] . $resultSC[0][3] . '';
     echo '</div>';


     
     /*

if (isset($_POST['valider']))
    {
    
    if (($_POST['motFr']==$resultSC[0][2]) && ($_POST['Prononciation']==$resultSC[0][3]))
    {
        echo 'Jayjay!';
    }
    
    else {
        
        echo 'Perdu! La bonne réponse était:' . $resultSC[0][2] . $resultSC[0][3];
        
    }
    
    }
       */
    ?>