<?php include_once("conprod.php");
       if(isset($_GET['id_client'])){
        $id=$_GET['id_client'];
        
          
         }
      
         $nom=$_POST['nom'];
         $prenom=$_POST['prenom'];
         $email=$_POST['email'];
         $password=$_POST['password'];
         $tel=$_POST['telephone'];
         $poste=$_POST['poste'];
         

         $sql = "UPDATE client SET nom='$nom',prenom='$prenom',email='$email',telephone='$tel',poste='$poste' WHERE id_client='$id'";
     

      $conn->query($sql) ;
        
        header('location:client.php'); 
        
     
   
       ?>