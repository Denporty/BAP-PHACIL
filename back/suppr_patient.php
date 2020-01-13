<?php

if(isset($_POST['supprimer'])){

 include("config.php");

            $donnees["nom"] = $_GET['nom'];
            $donnees["prenom"] = $_GET['prenom'];
            $statut ='success';

            $req = $bdd->prepare("DELETE FROM patient WHERE nom = :nom and prenom = :prenom");

            $req->execute();

            echo "Patient supprimer";

            }

?>