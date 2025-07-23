<?php 
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $connexion=new mysqli("localhost","root","","login");
$requete="DELETE  FROM panier WHERE id_prod= $id";
$connexion->query($requete);
 
  $delete=mysqli_query($connexion," DELETE FROM `panier` WHERE  `id_prod`='$id' ");
}
header("location:panier.php");
?>