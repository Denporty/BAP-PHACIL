<?php

	if(isset($_POST['patient'])){
	
	if(empty($_POST['nom'])){

		echo "Veuillez renseigner le nom";
		header("Refresh:2; url=../front/patient.html");
	}
	else if(empty($_POST['prenom'])){

		echo "Veuillez renseigner le prenom";
		header("Refresh:2; url=../front/patient.html");
	}
	else if (empty($_POST['adresse'])) 
	{
		echo "Veuillez renseignez une adresse";
		header("Refresh:2; url=../front/patient.html");
    }
    else if (empty($_POST['postal'])) 
	{
		echo "Veuillez renseignez un code postal";
		header("Refresh:2; url=../front/patient.html");
    }
    else if (empty($_POST['ville'])) 
	{
		echo "Veuillez renseignez une ville";
		header("Refresh:2; url=../front/patient.html");
	}
	else if (empty($_POST['num_med'])) 
	{
		echo "Veuillez renseignez un numéro de médecin national";
		header("Refresh:2; url=../front/patient.html");
	}
	else if (empty($_POST['phone'])) 
	{
		echo "Veuillez renseignez un numero de telephone";
		header("Refresh:2; url=../front/patient.html");
	}
	else if (empty($_POST['mail'])) 
	{
		echo "Veuillez renseignez un e-mail";
		header("Refresh:2; url=../front/patient.html");
	}

	else{
        $nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$adresse = $_POST['adresse'];
        $postal = $_POST['postal'];
		$ville = $_POST['ville'];
		$num_med = $_POST['num_med'];
		$phone = $_POST['phone'];
		$mail = $_POST['mail'];

		include 'config.php';



		$resultat = $bdd->prepare('SELECT * FROM patient WHERE nom=? and prenom=?');

		$resultat->execute(array($nom,$prenom));

		$verif=$resultat->fetch();

		if (!empty($verif)) {

		echo "Ce patient est deja enregistrer";
		header("Refresh:2; url=../front/patient.html");


		}
		else{

		$req = $bdd->prepare("INSERT INTO patient (nom, prenom, adresse, postal, ville, num_med, phone, mail) VALUES (:nom, :prenom, :adresse, :postal, :ville, :num_med, :phone, :mail)");

		$req->execute(array(

			'nom' => $nom,
			'prenom' => $prenom,
			'adresse' => $adresse,
            'postal'=> $postal,
			'ville'=> $ville,
			'num_med'=> $num_med,
			'phone'=> $phone,
			'mail'=> $mail,

		));
			

		echo "Patient enregistrer";
		header("Refresh:2; url=../front/patient.html");
	
		}

	}


		}
?>