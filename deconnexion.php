<?php  // deconnexion de clients 
session_start();

session_unset();

session_destroy();

header("location:acceuil.php");
?>
