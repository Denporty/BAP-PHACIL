<!DOCTYPE html>
<body>

<?php

include('../back/config.php');

$req = $bdd->query('SELECT * FROM patient');

foreach ($req as $donnees) {  ?>

<form action="../back/suppr_patient.php" name="supprimer" class="login-form" method="POST">
<div>
<?php
echo $donnees["prenom"];

echo " ";

echo $donnees["nom"];

?>
<input type="submit" name="supprimer" value="supprimer">

</div>

</form>
<?php
}

$req->closeCursor();

?> 



</body>