<?php  include_once("conprod.php");
$_SESSION['idprod']=$_POST['idprod'];
$_SESSION['nom']=$_POST['nom'];
$_SESSION['prix']=$_POST['prix'];
$_SESSION['qnt']=$_POST['quantite'];
$_SESSION['img']=$_POST['img'];
$_SESSION['client']=$_POST['client'];

$requet=$conn->prepare('INSERT INTO panier(img-produit,quantité,prix,nom-produit) VALUES(?,?,?,?,?,?)');

$requet->execute(array($_SESSION['img'],$_SESSION['qnt'],$_SESSION['prix'],$_SESSION['nom']));
echo " operation faite ";


?>