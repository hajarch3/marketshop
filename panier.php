<?php
session_start();
$_SESSION['id_client'];
?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
   
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
       <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>   
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link  href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" rel="stylesheet">        <!--Link OF BOOTSRAP-->   
       
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
     
        <script src="js.js"></script>        
    <title>SmartSHOP</title>
</head>
<body >
    <nav>
        <img  id="logo"src="lgg.png">
       <div class="search-box">
        <form action="">
            <input type="search" placeholder="search">
            <button type="submit"><i class="fa fa-search"></i></button>
       </form>
      </div>
       <p class="username"> <?php 
     if(isset($_SESSION['nom'])){
                        echo  $_SESSION['nom']." ".$_SESSION['prenom'];        
  }

     ?></p> 
   
    <div class="nav1">
     
       <a href="connexion.php"><i class="fa fa-user-o" aria-hidden="true"></i></a> 
       <a href="panier.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
      
     
       <a href="deconnexion.php" ><i class="material-icons-round">logout</i></a>
      </div>
    </nav>



    <!-- affichage de panier-->
     <h1 id='hh'>Panier</h1>
    <section  class="container">
   <?php if(!isset($_SESSION['nom'])){
header("location:connexion.php");
  }
    
     else{
$client=$_SESSION['id_client'];
include_once("conprod.php");
$request=$conn->query("SELECT * FROM panier WHERE id_client=$client");
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
         

        </div>
          <div class="infoprod">        

           <h5><a href="#" > <?php echo $don['nom']?></a></h5>            
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           <button id="trash" class="poubelle"> <a href="deletepanier.php?id=<?php echo $don['id_prod'];?>"><span class="material-symbols-outlined">delete</span></a></button>
           </div>
           
            
   </div>  
  </div>
   
<?php ;}
}?>
 
    <!-- *****-->


    
                </section>