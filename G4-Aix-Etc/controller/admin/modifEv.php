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
 
 $filename='../../assets/imagesEv/Ev'.$_POST['idEv'].'.jpg';
 
 if (isset($_POST['modifEv']))
  {
    $nom = addslashes($_POST['nomEv']);
    $texte = addslashes($_POST['texteEv']);
    $sql= ("UPDATE evènement SET nom='".$nom."', id_lieu='".$_POST['adresse']."', texte='".$texte."', dateDebut='".$_POST['debutEv']."', dateFin='".$_POST['finEv']."' WHERE id='".$_POST['idEv']. "' ");
    $result= $laBase->requete($sql);
    //echo $sql;
    
    if(isset($_POST['supprimer'])) {
        unlink($filename);
    }
    
if(isset($_FILES['photo'])) {
 if (file_exists($filename)){
unlink($filename);       
}
$uploadfile = $filename . basename();
echo $uploadfile;

echo '<pre>';
if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
    //echo "Le fichier est valide, et a été téléchargé
      //     avec succès. Voici plus d'informations :\n";
} else {
    echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
}

//echo 'Voici quelques informations de débogage :';
//print_r($_FILES);

echo '</pre>';
    }
    
    echo '<script type="text/javascript">alert("Votre évènement a bien été modifié");</script>';
    echo "<script type='text/javascript'>document.location.replace('../../views/admin/gestion.php');</script>";
  }

    ?>