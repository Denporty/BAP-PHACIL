<?php

if(isset($_POST['supprimer'])){

 include("config.php");

            $nom = $_GET["nom"];
            $prenom = $_GET["prenom"];

            $req = $bdd->prepare("DELETE FROM patient WHERE nom = $nom and prenom = $prenom");

            $req->execute();

            echo "Patient supprimer";

            }

?>