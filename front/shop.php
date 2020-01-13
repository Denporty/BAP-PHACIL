<!doctype html>

<html lang="fr">

    <head>
        <?php include("../back/include/head.php"); ?>
        <!-- Titre du site (onglet) -->
        <title>Shop</title>
    </head>

    <body>
                              <?php

                              include('../back/config.php');

                  $req = $bdd->query('SELECT * FROM ajout_medicament');

                  // On affiche chaque entrée une à une
                    foreach ($req as $donnees) {  

                  ?>

                  <div class="card" style="width: 250px; max-height: auto;">
                    
                    <img src="../back/upload/<?php echo $donnees['photo']; ?>" class="card-img-top" style="max-height: 100px;" alt="...">
                    
                    <div class="card-body">

                        <div class="text-center">
                    
                          <h5 class="card-title" style="color: black;"><?php echo $donnees["nom_medicament"]; ?></h5>

                          <p class="card-text" style="color: black;">Stock disponible : <?php echo $donnees["stock"]; ?></p>
                          
                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $donnees['id']; ?>">Voir le contenu</button>

                        </div>
                    
                    </div>

                  </div>

                    <!--modal-->


                    <!-- Large modal -->
                    

                       <div class="modal fade" id="exampleModal<?php echo $donnees['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            
                            <div class="modal-dialog" role="document">
                                
                                <div class="modal-content">
                                    
                                    <div class="modal-header">
                                        
                                        <h5 class="modal-title" id="exampleModalLabel" style="color: black"><?php echo $donnees["nom_medicament"]; ?></h5>
                                        
                                    
                                    </div>
                                    
                                    <div class="modal-body">
                                        
                                    <img src="upload/<?php echo $donnees['photo']; ?>" class="card-img-top" style="max-height: 100px;" alt="...">

                                        <small> <i style="color: black">Stock disponible : <?php echo $donnees["stock"]; ?> </i> </small>

                                        <hr>

                                        <p style="color: black"> 

                                            <?php echo $donnees["info"]; ?>
                                            
                                        </p>
                                    
                                    </div>
                                    
                                    <div class="modal-footer">
                                        
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ajouter</button>

                                    </div>
                                
                                </div>

                            </div>

                        </div>

                  <?php
                  
                  }

                  $req->closeCursor(); // Termine le traitement de la requête

                  ?> 

                </div>

        </main>

        <!-- FOOTER : Bas du site -->
        <footer class="container">
            
            <?php include("../back/include/js.php"); ?>

        </footer>

    </body>

</html>