<?php   
require("../laBDD.php");
require("../parametres.php");

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
    
    $nomEv = addslashes($_POST['nomEv']);
    $texteEv = addslashes($_POST['texteEv']);
    $sqlEv= ("INSERT INTO evènement (nom,texte,dateDebut,dateFin,id_lieu) VALUES ('".$nomEv."', '".$texteEv."', '".$_POST['debutEv']."', '".$_POST['finEv']."', '".$_POST['adresseEv']."')");
    $result= $laBase->requete($sqlEv);
    
    $id=$laBase->derniereLigneInsert();
    
    $path = "../../assets/imagesEv/";
    $path = $path . basename('Ev'.$id.'.jpg');
    if(move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
    echo '<script type="text/javascript">alert("Votre fichier ".  basename( $_FILES["photo"]["name"])." a bien été importé");</script>';
      $_FILES['file']['error'];
    } else{
        echo "";
    }
    
    echo '<script type="text/javascript">alert("Votre évènement a bien été crée");</script>';
     echo "<script type='text/javascript'>document.location.replace('../../views/admin/gestion.php');</script>";
    //echo $sqlEv;
    ?>