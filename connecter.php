<?php 
//connexion en base donner de login
session_start();

$_SESSION['error_login'] ;
$_SESSION['email']=$_POST['email']; 
$_SESSION['password']=$_POST['password'];
$_SESSION['id_client'];

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=login",
    $username, $password) ;

//verfication de login 
$table=$conn->query('SELECT * FROM client');
$m=0;
while($don=$table->fetch()){
    
    if( $_SESSION['email']==$don["email"] && $_SESSION['password']==$don["password"] ){
        if( $don['poste']=="admin" ){
            $m=3;
           
        }
        else{  
             $m=2;
        $_SESSION['nom']=$don["nom"];
        $_SESSION['prenom']=$don["prenom"];
        $_SESSION['id_client']=$don["id_client"];

        }
     
    }
  
}

if($m==2){
    header("location:acceuil.php");
    $_SESSION['error_login']="";

}
elseif($m==3){
    header("location:pageadmin.html");
    $_SESSION['error_login']="";
}
else{
    $_SESSION['error_login'] = "Mot de passe Incorrecte";
    header("location:connexion.php");
 }
?>

