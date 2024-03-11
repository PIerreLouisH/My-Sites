<?php
require("index.php");

?>
<html>
    <head>
        
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <link href="Styles/Style.css" rel="stylesheet" type="text/css"/>
    
     </head>
    <script type="text/javascript"> 
$(document).ready(function() {
    $('#table').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
        }
    } );
} );
 </script>
    
     <br>
   <form action='' method='post'>
       <?php
       $sql= "SELECT numBibli, motFr, Prononciation, SigneChi FROM bibli";
       $result = $laBase->requete($sql);
    echo '<table id="table" class="display">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Mot Français</th>';    
    echo '<th>Prononciation</th>';
    echo '<th>Signe Chinois</th>'; 
    echo '<th> </th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';  
    
    foreach ($result as $unResult)
    {
    echo '<tr>';
    echo '<td style="text-align:center;">' . $unResult[1] . '</td>';
    echo '<td style="text-align:center;">' . $unResult[2] . '</td>';
    echo '<td style="text-align:center;">' . $unResult[3] . '</td>';
    echo '<td style="text-align:center"><a href="supprimer.php?numBibli=' . $unResult[0] . '" onclick="return(confirm(\'Confirmer la suppression\'))" class="btnAction">supprimer</a></td></td>';     
    echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';    