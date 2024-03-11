<?php 
require("index.php");

 if(isset($_POST["import"])){
		
		$filename=$_FILES["file"]["tmp_name"];		
 
 
		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
 
 
	           $sql = "INSERT into bibli (motFr,Prononciation,SigneChi) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."')";
                   $result = $laBase->requete($sql); 
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Fichier invalide: Merci de mettre un fichier CSV.\");
							window.location = \"liste.php\"
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"Le fichier CSV a bien été importé.\");
						window.location = \"liste.php\"
					</script>";
				}
	         }
			
	         fclose($file);	
		 }
	}	 
?>

        <link rel="stylesheet" type="text/css" href="Styles/responsiveform.css">
	<link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="Styles/responsiveform1.css">
	<link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="Styles/responsiveform2.css" >
	<link rel="stylesheet" media="screen and (max-width: 350px)" href="responsiveform3.css" >

<body>

<?php if (!empty(@$_GET[success])) { echo "<b>Le fichier a bien été importé.</b><br><br>"; } ?>

    <br>
    <div id="envelope">
        <header>
           <h2>Ajouter de nouveaux mots</h2> 
        </header>
        
<form action="" method="post" class='form-style-10' enctype="multipart/form-data">
    <input type="file" name="file" ><br><br>
    <input type="submit" name="import" value="Importer">
</form>
</div>
</body>
</html> 

