<!DOCTYPE html>

<head>
<?php include('../back/include/head.php') ?>
</head>
<body>

<h2>Liste des patients</h2>

<?php

require_once('../back/config.php');

$req = $bdd->query('SELECT * FROM patient');

foreach ($req as $donnees) {  ?>

<div id="principale">
    
        <?php 

        echo $donnees["prenom"];

        echo " ";

        echo $donnees["nom"];


        ?>

        <div class ="ModalDelete">


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletePatient<?php echo $donnees['id']; ?>">
	    			Supprimer
	    		</button>

<!-- Modal -->
<div class="modal fade" id="deletePatient<?php echo $donnees['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deletePatient" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $donnees["nom"]?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="../back/suppr_patient.php">



<button type="submit" name="id_patient" value="<?php echo $donnees['id'];?>" class="Bootstrap">Confirmation</button>

</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

        </div>


</div>

<?php
}

$req->closeCursor();

?> 

<footer>

<?php include('../back/include/js.php') ?>

</footer>
</body>
