<?php 
if(isset($_GET['id_prod'])){
  $id=$_GET['id_prod'];
  $connexion=new mysqli("localhost","root","","login");
$requete="DELETE  FROM produits WHERE id_prod= $id";
$connexion->query($requete);
 
  $delete=mysqli_query($connexion," DELETE FROM `produits` WHERE  `id_prod`='$id' ");
}
header("location:admin.php");
?>