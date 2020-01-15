<?php

if(isset($_POST['id_patient'])){

      $link = mysqli_connect("localhost", "root", "", "phacil"); 

      $id=$_POST['id_patient'];
  
      if($link === false){ 
          die("ERROR: Could not connect. " . mysqli_connect_error()); 
      } 
        
      $sql = "DELETE FROM patient WHERE ID=$id"; 
      if(mysqli_query($link, $sql)){ 
          echo "Record was deleted successfully."; 
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