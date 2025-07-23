<?php 
if(isset($_GET['id_client'])){
  $id=$_GET['id_client'];
  $connexion=new mysqli("localhost","root","","login");
$requete="DELETE  FROM client WHERE id_client= $id";
$connexion->query($requete);
 
  $delete=mysqli_query($connexion," DELETE FROM `client` WHERE  `id_client`='$id' ");
}
header("location:client.php");
?>
    