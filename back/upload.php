<?php

	if(isset($_POST['ajout'])){
	
	if(empty($_POST['nom_medicament'])){

		echo "Veuillez renseigner le nom";
		header("Refresh:2; url=ajoutmedicament.php");
	}
	else if(empty($_POST['stock'])){

		echo "Veuillez renseigner les stocks";
		header("Refresh:2; url=ajoutmedicament.php");
	}
	else if (empty($_FILES['photo'])) 
	{
		echo "Veuillez mettre une photo";
		header("Refresh:2; url=ajoutmedicament.php");
    }
    else if (empty($_POST['info'])) 
	{
		echo "Veuillez renseignez une description";
		header("Refresh:2; url=ajoutmedicament.php");
    }

	else{
        $nom_medicament = $_POST['nom_medicament'];
		$stock = $_POST['stock'];
		$info = $_POST['info'];
		$categorie = $_POST['categorie'];

		include 'config.php';


		if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $filename = $_FILES["photo"]["name"];
            $filetype = $_FILES["photo"]["type"];
    
            
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");
    
            
            if(in_array($filetype, $allowed)){
            
        
                    move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);
    
                    
		$req = $bdd->prepare("INSERT INTO ajout_medicament (nom_medicament, stock, categorie, photo, info) VALUES (:nom_medicament, :stock, :categorie, :photo, :info)");

		$req->execute(array(

			'nom_medicament' => $nom_medicament,
			'categorie' => $categorie,
			'stock' => $stock,
			'photo' => $filename,
            'info'=> $info,

		));
			
                
    
                    echo "Medicament enregistrer";
                    header("Refresh:2; url= ajoutmedicament.php");
                } 
            } else{
                echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
            }
        }
    }

	


		
?>