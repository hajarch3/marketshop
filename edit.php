<?php include_once("conprod.php");
       if(isset($_GET['id'])){
        $id=$_GET['id'];
        //$sql=$conn->query("SELECT * FROM produits WHERE id_prod=$id_prod");
        //$tab=$sql->fetch();
          
         }
      
         $nom=$_POST['nom'];
        $prix=$_POST['prix'];
        $img=$_POST['img'];
        $promo=$_POST['promo'];
    $qte=$_POST['quantite'];
    $cat=$_POST['nomcat'];
    $scat=$_POST['souscat'];
    $sscat=$_POST['s-souscat'];

         $sql = "UPDATE produits SET nom='$nom',prix='$prix',img='$img',promo='$promo',quantite='$qte',category='$cat',souscategory='$scat',sscategory='$sscat' WHERE id_prod='$id'";
     

      $conn->query($sql) ;
        
        header('location:admin.php'); 
        
     
   
       ?>

       



    
    
</body>
</html>