<!DOCTYPE html>
<body>

<h2>Liste des patients</h2>

<?php

include('../back/config.php');

$req = $bdd->query('SELECT * FROM patient');

foreach ($req as $donnees) {  ?>


<div>
    
<?php 

echo $donnees["prenom"];

echo " ";

echo $donnees["nom"];


?>
<a href="../back/suppr_patient.php">Supprimer</a>

</div>

</form>
<?php
}

$req->closeCursor();

?> 




</body>