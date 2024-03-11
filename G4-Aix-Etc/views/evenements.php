<script src="../assets/js/jquery.paginate.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/jquery.paginate.css" />
<section>
    <h1>Évènements</h1>
    <div class="articles">
    
    <?php
    $laBase=new laBDD($hote, $user, $pass, $base);
    $laBase->connexion();
    
    $sql='SELECT evènement.nom, texte, dateDebut, dateFin, lieu.nom, evènement.id FROM evènement INNER JOIN lieu WHERE evènement.id_lieu=lieu.id ORDER BY id DESC';
    $result= $laBase->requete($sql);
    
    $sqlCount='SELECT COUNT(id) FROM evènement';
    $resultCount=$laBase->requete($sqlCount);
    
    $total=$resultCount[0][0];
    echo '<span id="example">';
    foreach ($result as $unResult) {
        $dateDebut=date_create($unResult[2]);
        $dateDebut=date_format($dateDebut, 'd-m-Y');
        
        $dateFin=date_create($unResult[3]);
        $dateFin=date_format($dateFin, 'd-m-Y');
    
        $filename='./assets/imagesEv/Ev'.$unResult[5].'.jpg';
        echo '<div class="article_event">';
        echo '<div class="container-img">';
        if (file_exists($filename))
        {
            echo '<img alt="bar1" class="img" src="'.$filename.'"/>';
        }
        else {
         echo '<img alt="bar1" class="img" src="../assets/images/event/event1.jpg"/>';   
        }
        
        echo '</div>';
        echo '<div class="content">';
        echo '<h2 class="sous_titre">'.$unResult[0].'</h2>';
        echo '<h3 class="lieu_evenement">'.$unResult[4].'</h3>';
        echo '<h3 class="date_evenement">'.$dateDebut.' | '.$dateFin. '</h3>';
        echo '<p>'.$unResult[1].'</p>';
        echo '</div>';
        echo '</div>';
    }
    echo '</span>';
    ?>

    
    
            <div class="carte">
                <a href="index.php?action=1#carte"><button class="btn-contact"> Se situer </button></a>
            </div>
        </div>
    </div>
</section>
<script>
  $('#example').paginate({
	  scope: $('div'), 
	});


</script>