<?php

	if(isset($_POST['connexion'])){
	
	if(empty($_POST['email'])){

		echo "Veuillez renseigner votre email";
		header("Refresh:2; url=../front/connexion.html");
	}
	else if(empty($_POST['mdp'])){

		echo "Veuillez renseigner un mot de passe";
		header("Refresh:2; url=../front/connexion.html");
	}

	else{

        $email = $_POST['email'];
		$mdp = $_POST['mdp'];

		include 'config.php';


        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

		$resultat = $bdd->prepare('SELECT * FROM inscriptionphar WHERE email=? and mdp=?');

		$resultat->execute(array($email,$mdp));

        $verif=$resultat->fetch();
        
		if (!empty($verif)) {

            echo "pharmacien";
            header("Refresh:2; url=../front/connexion.html");

            }
        
        
		else{

			$resultat = $bdd->prepare('SELECT * FROM inscriptionmed WHERE email=? and mdp=?');

			$resultat->execute(array($email,$mdp));
	
			$verif=$resultat->fetch();

			if (!empty($verif)) {

				echo "Bienvenu";
				header("Refresh:2; url=../front/patient.html");
	
				}

				else{

		echo "Mauvais mot de passe ou Email";
		header("Refresh:2; url=../front/connexion.html");

				}
	
		}

	}


		}
?>