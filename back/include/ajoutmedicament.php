<!DOCTYPE html>
<html>
	<body>
        <div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-around;">
        
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Ajouter un produit</button>
            
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">
								Ajouter un produit
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<form action="upload.php" method="post" enctype="multipart/form-data">
								<div >
									<label for="recipient-name" class="col-form-label">Nom du médicament</label>
									<input type="text" class="form-control" id="nom_medicament" name="nom_medicament">
								</div>
								<select class="custom-select" id="inputGroupSelect01" name="categorie" required>
                              
                                <option selected>Choisir une categorie...</option>
                                <option value="cardiologie">Cardiologie</option>
                                <option value="soin dentaire">Soins Dentaire</option>
                                <option value="optique">Optique</option>
                                <option value="neurologie">Neurologie</option>
								<option value="respiratoire">Respiratoire</option>
                          
                              </select>
								<div >
									<label for="recipient-name" class="col-form-label">Stock disponible</label>
									<input type="text" class="form-control" id="stock" name="stock">
								</div>
								<div>
									<label for="fileUpload">Photo du produit:</label>
									<input type="file" name="photo" id="photo">
								</form>
								<div>
									<label for="message-text" class="col-form-label">Description</label>
									<textarea class="form-control" id="info" name="info"></textarea>
                                </div>
                                <div class="modal-footer">
                        <input type="submit" name="ajout" value="ajout">
						</div>
							</form>
						</div>
						
					</div>
				</div>
			</div>
			<?php include("js.php"); ?>
		</body>
	</html>
