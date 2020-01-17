<?php

if(isset($_POST['id_medicament'])){

      $link = mysqli_connect("localhost", "root", "", "phacil"); 

      $id=$_POST['id_medicament'];
      $up=$_POST['upstock'];
      if($link === false){ 
          die("ERROR: Could not connect. " . mysqli_connect_error()); 
      } 
        
      $sql = "UPDATE ajout_medicament SET stock=$up WHERE id=$id"; 
      if(mysqli_query($link, $sql)){ 
          echo "Record was update successfully."; 
      }  
      else{ 
          echo "ERROR: Could not able to execute $sql. "  
                                         . mysqli_error($link); 
      } 
      mysqli_close($link);
}

else {
    echo "erreur";
}

?>