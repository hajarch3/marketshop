
<?php 
session_start();
$_SESSION['id_client']
?>
 <?php 
session_start();
if(!isset($_SESSION['nom']) 
){
   header("location:connexion.php");
   
} else{
    include_once("conprod.php");
    if (isset($_GET['id'])){ 
        $id_p=$_GET['id'];
        }
        $sql=$conn->query("SELECT * FROM produits where id_prod=$id_p");
        while($do=$sql->fetch()){

           $nom=$do['nom'];
           $id_prod=$do['id_prod'];
           $img=$do['img'];
           $prix=$do['prix'];
           $quantite=$do['quantite'];
           $id_client=$_SESSION['id_client'];
          
        }
      $sql=$conn->prepare("INSERT INTO panier(id_prod,img,nom,prix,quantite,id_client)VALUES(?,?,?,?,?,?)");
      $sql->execute(array($id_prod,$img,$nom,$prix,$quantite,$id_client));
header("location:detaileprod.php?id=$id_prod");




}









?>