<?php

	if(isset($_POST['inscription'])){
	
	if(empty($_POST['nom'])){

		echo "Veuillez renseigner le nom";
		header("Refresh:2; url=../front/pharma.html");
	}
	else if(empty($_POST['prenom'])){

		echo "Veuillez renseigner le prenom";
		header("Refresh:2; url=../front/pharma.html");
	}
	else if (empty($_POST['mdp'])) 
	{
		echo "Veuillez renseignez un mot de passe";
		header("Refresh:2; url=../front/pharma.html");
    }
    else if (empty($_POST['email'])) 
	{
		echo "Veuillez renseignez un mail";
		header("Refresh:2; url=../front/pharma.html");
    }
	else if (empty($_POST['ville'])) 
	{
		echo "Veuillez renseignez une ville";
		header("Refresh:2; url=../front/pharma.html");
	}
	else if (empty($_POST['postal'])) 
	{
		echo "Veuillez renseignez un code postal";
		header("Refresh:2; url=../front/pharma.html");
	}
	else if (empty($_POST['adresse'])) 
	{
		echo "Veuillez renseignez une adresse";
		header("Refresh:2; url=../front/pharma.html");
	}
	else if ($_POST['mdp']!=$_POST['confirmmdp']) 
	{
		echo "Veuillez confirmer votre mot de passe";
		header("Refresh:2; url=../front/pharma.html");
    }

	else{
        $nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$mdp = $_POST['mdp'];
        $email = $_POST['email'];
		$ville = $_POST['ville'];
		$postal = $_POST['postal'];
		$adresse = $_POST['adresse'];

		include 'config.php';


		$email = $_POST['email'];

		$resultat = $bdd->prepare('SELECT * FROM inscriptionphar WHERE email=?');

		$resultat->execute(array($email));

		$verif=$resultat->fetch();

		if (!empty($verif)) {

		echo "Ce mail est deja enregistrer";
		header("Refresh:2; url=../front/pharma.html");


		}
		else{

		$req = $bdd->prepare("INSERT INTO inscriptionphar (nom, prenom, adresse, code_postal, ville, email, mdp) VALUES (:nom, :prenom, :adresse, :code_postal, :ville, :email, :mdp)");

		$req->execute(array(

			'nom' => $nom,
			'prenom' => $prenom,
			'adresse' => $adresse,
            'code_postal'=> $postal,
			'ville'=> $ville,
			'email'=> $email,
			'mdp'=> $mdp,

		));
			

		echo "Information enregistrer";
		header("Refresh:2; url=../front/pharma.html");
	
		}

	}


		}
?>