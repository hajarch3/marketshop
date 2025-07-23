 
 
 <?php 
session_start();

?><!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css.css">
 <link rel="stylesheet" href="css.css">
   
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
       <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>   
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link  href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" rel="stylesheet">        <!--Link OF BOOTSRAP-->   
       
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
     
 <script src="js.js"></script>
  <title>Document</title>
 </head>
 <body>
  

   <!--partie de details de produits et choix de quantité commandée-->
   <div class="pop" id="pop">
 
 <div class="details">

  <?php include_once("conprod.php");
 if (isset($_GET['id'])){ 
 $id=$_GET['id'];
 }

   $do=$conn->query("SELECT * FROM produits where id_prod=$id");
   while($d=$do->fetch()){?>

 <div class="im"><!--image de prod-->
   <img style="height:100%; width:100%" src="<?php echo $d['img']?>">
 </div>
 <div class="right">
  <button class="close" ><a href="acceuil.php">X</a> </button><!--close button-->
  <div class="info"><!--partie info de prod-->
   <h1><?php echo $d['nom']?></h1><!--nom de prod-->
   <p> size: <?php echo $id;?>
   <!--size-->
   </p>
   <h4><?php echo $d['prix'];?></h4><!--prix-->
   <div class="quantité"> Quantité :<input type="text" name="" id="quantite"  ></div><!--qte-->
   <div class="panier">
      <button ><a href="addtopanier.php?id=<?php echo $id;?>">Ajouter Au Panier &nbsp <span class="fa fa-shopping-cart"></span></a> </button><br><!--bouton d'ajout au panier-->
      <button ><a href="panier.php">Mon panier &nbsp &nbsp<span class="fa fa-shopping-cart"></span></a> </button>
    </div>
  </div>
 </div>

<?php 

 ;}?>


</div>
</div> 
</body>
 </html> 