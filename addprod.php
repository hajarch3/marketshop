<?php  include_once("conprod.php");
$_SESSION['idprod']=$_POST['idprod'];
$_SESSION['nom']=$_POST['nom'];
$_SESSION['prix']=$_POST['prix'];
$_SESSION['qnt']=$_POST['quantite'];
$_SESSION['nom_cat']=$_POST['nomcat'];
//$_SESSION['taille']=$_POST['taille'];
$_SESSION['img']=$_POST['img'];
$_SESSION['promo']=$_POST['promo'];
$_SESSION['souscat']=$_POST['souscat'];
$_SESSION['s-souscat']=$_POST['s-souscat'];

$requet=$conn->prepare('INSERT INTO produits(id_prod,img,nom,prix,quantite,category,promo,souscategory,sscategory) VALUES(?,?,?,?,?,?,?,?,?)');

$requet->execute(array($_SESSION['idprod'],$_SESSION['img'],$_SESSION['nom'],$_SESSION['prix'],$_SESSION['qnt'],$_SESSION['nom_cat'],$_SESSION['promo'],$_SESSION['souscat'],$_SESSION['s-souscat']));
echo " operation faite ";


?>