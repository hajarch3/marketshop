<?php 
//connexion en base donner de login
session_start();
$_SESSION['nom']=$_POST['nom'];
$_SESSION['prenom']=$_POST['prenom'];
$_SESSION['email']=$_POST['email']; 
$_SESSION['password']=$_POST['password'];
$_SESSION['telephone']=$_POST['telephone'];

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=login",
    $username, $password) ;

$t=0;
//verification de donnees selon l'inscription
$table=$conn->query('SELECT * FROM client');
while($don=$table->fetch()){
    
    if( $_SESSION['email']==$don["email"] ){
        $t=3;
    }
  
}
if($t==3){
    $_SESSION['error_email'] = "Email existe deja";
    header('location:signup.php');
}
else{
  
//insertion donnes au bd

$requet=$conn->prepare('INSERT INTO client(nom,prenom,email,telephone,password) VALUES(?,?,?,?,?)');
$requet->execute(array($_SESSION['nom'],$_SESSION['prenom'],$_SESSION['email'],$_SESSION['telephone'],$_SESSION['password']));
  header('location:acceuil.php');
}

?>


<br>
