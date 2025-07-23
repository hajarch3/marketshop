<?php 
session_start();

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
<body class="acceuil"> <!-- menu horizontal -->
    <nav>
        <img  id="logo"src="lgg.png">
       
       <div class="search-box">
        <form action="">
            <input type="search" placeholder="search">
            <button type="submit"><i class="fa fa-search"></i></button>
       </form>
      </div><!-- nom de client s'affiche  quand il se connecte dans son compte-->
       <p class="username"> <?php 
        
     if(isset($_SESSION['nom'])){

                        echo  $_SESSION['nom']." ".$_SESSION['prenom'];
                       // echo $_SESSION['id_client']; id de client
                    }

     ?></p> 
   
    <div class="nav1"><!--meni vertical de categories-->
     
       <a href="connexion.php"><i class="fa fa-user-o" aria-hidden="true"></i></a> 
       <a href="panier.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
      <!-- <a href=""><i class="fa fa-heart-o" aria-hidden="true"></i> </a>-->
      <!-- <a href=""><i id="comment" class="material-symbols-rounded"> comment </i></a>-->
      <!-- deconnexion de compte-->
       <a href="deconnexion.php" ><i class="material-icons-round">logout</i></a>
      </div>
    </nav>
 
    <div class="category" id="menu" onmouseenter="openmenu()" onmouseleave="closemenu()">
      <ul>
       <li> <a> 
          <i class="material-icons-round " > menu </i>
        </a></li> 
      
        <li>  <a  onmouseover="openNav1()"> 
            <i class="material-icons-round">checkroom</i>
              <span>Vêtements</span>
          </a> </li>
      
         <li> <a onmouseover="openNav3()">
            <i class="material-icons-round" >electrical_services</i>
            <span>Électronique</span>
          </a></li>
         <li><a onmouseover="openNav4()"> 
            <i class="material-icons-round" >chair</i>
            <span>Home</span>
          </a> </li>
          <!-- categorie  de food et biblio sans encore vide -->
          <li>  <a  onmouseover="openNav0()"> 
             <i class="material-icons-round">fastfood</i>
              <span>Food</span>
            </a></li>  <li><a onmouseover="openNav2()">
          <i class="material-icons-round">menu_book</i>
          <span>Bibliothèque</span>
        </a> </li> 
       </ul>
    </div>
    
<!--Sous menu de chaque categories-->
    <div onpointerleave="closemenu()" onmouseenter="openmenu()" onmouseleave="closeNav0()" id="food"> 
      <h2>Food</h2>
      <br>
    <div class="foodligne">
      <div class="foodcol"><!--boisson-->
        <h4><a href="">Boissons</a></h4>
        <ul>
          <li onclick="showeau()">Eau</li>
          <li>Lait</li>
          <li>Boissons gazeuses</li>
          <li>Café</li>
        </ul>
        </div>
      <div class="foodcol"><!--epicerie-->
         <h4><a href="">Épicerie </a></h4>
         <ul>
          <li>Légumes</li>
          <li>Fruits</li>
          <li>Salés</li>
          <li>Sucrées</li>
         </ul>
        </div>
      </div>
      <div class="foodligne">
         <div class="foodcol"><!--produits-->
          <h4><a href="">Produits</a> </h4>
           <ul>
            <li>Papier</li>
            <li>Nettoyage</li>
            <li>Parfums</li>
            <li></li>
           </ul>
          </div>
         <div class="foodcol"><!--surgeles-->
          <h4><a href="">Surgelés</a></h4>
          <ul>
            <li>Pizzas</li>
            <li>Fruits de mer</li>
            <li>Glacées</li>
            <li></li>
          </ul>

         </div>
      </div>
     </div><!-- menu de vetements-->
    <div onpointerleave="closemenu()" onmouseenter="openmenu()" onmouseleave="closeNav1()" id="Vetement">
      <h2>Vêtements</h2>
      <br>
    <div class="vetligne">
      <div class="vetcol">
        <h4><a href="">Homme</a></h4><!--homme-->
        <ul>
          <li> <a href="#pantalonh" onclick="Vis7()">Pantalons</a></li>
          <li> <a href="#chemises" onclick="Vis8()">Chemises </a></li>
          <li><a href="#vestes" onclick="Vis9()">Vestes </a></li>
          <li><a href="#pantalonh" onclick="Vis10()">Chaussures</a></li>
        </ul>
        </div>
      <div class="vetcol">
         <h4><a href="">Femme</a></h4><!--femme-->
         <ul>
          <li>Pantalons</li>
          <li>T-shirts</li>
          <li>Robes</li>
          <li>Chaussures</li>
         </ul>
        </div>
      </div>
      <div class="vetligne">
         <div class="vetcol"><!--enfants-->
          <h4><a href="">Enfant</a> </h4>
           <ul>
            <li>Jeans</li>
            <li>T-shirts</li>
            <li>Robes</li>
            <li>Chaussures</li>
           </ul>
          </div>
         <div class="vetcol"> <!--bebe-->
          <h4><a href="">Bébé</a></h4>
          <ul>
            <li>Pantalons</li>
            <li>Ensembles</li>
            <li>Sous-vetements</li>
            <li>chaussures</li>
          </ul>

         </div>
      </div>
    </div><!-- menu de biblio-->
    <div onpointerleave="closemenu()" onmouseenter="openmenu()" onmouseleave="closeNav2()" id="books">
      <h2>Bibliothèque</h2>
      <br>
      <div class="row">
        <div class="col-md-6 ssmenu ">
         <a href=""> <h4> Cahiers </h4></a><!-- cahiers-->
         <ul>
          <li>Grand cahiers</li>
         
          <li>Petit cahiers</li>
         <li>double feuilles</li>
         <li>classeurs</li>
         
        </ul>
        </div>
        <div id="outils" class="col-md-6 ssmenu"><!--outil scolaire-->
          <a href=""> <h4>Outils scolaires  </h4></a>
          <ul>
            <li>stylos</li>
           <li> Règles </li>
            <li>trousses</li>
           <li>cartables</li>

          </ul>
        </div>
      </div>

      <div class="row">
        <div id="livres" class="col-md-6 ssmenu">
          <a href=""> <h4> Livres </h4></a><!--livre-->
          <ul>
            <li>Les Livres en Français</li>
            <li>Les Livres en Arabe</li>
            <li>Les Livres en Anglais</li>
         
            </ul>
        </div>
        <div id="romans" class="col-md-6 ssmenu">
          <a href=""> <h4> Romans</h4></a><!--romans-->
          <ul>
            <li>Roman historique</li>
            <li>Roman d’aventures</li>
            <li>Roman autobiographique</li>
            <li> Roman policier</li>
            </ul>
        </div>
        </div>
    </div><!-- menu de electro -->
    <div onpointerleave="closemenu()" onmouseenter="openmenu()" onmouseleave="closeNav3()" id="electro">
      <h2>Électronique</h2>
      <br>
    <div class="electroligne">
      <div class="electrocol">
        <h4><a href="">Informatique</a></h4> <!--Informatique-->
        <ul><li > 
          <li > <a href="#ordinateur" onclick="vis10()">Ordinateurs</a></li>
          <li ><a href="#imprimantes" onclick="showimpri()">Imprimantes Et Scanners</a></li>
          <li ><a href="#périphérique"onclick="showperip()">périphérique</a></li>
        </ul>
        </div>
      <div class="electrocol">
         <h4><a href=""> Mobiles</a></h4><!--mobiles-->
         <ul>
          <li ><a href="#Smartphones" onclick="showsmart()">Smartphones</a></li>
          <li ><a href="#Tablettes" onclick="showtab()">Tablettes</a></li>
          <li ><a href="#Objets Connectés" onclick="showoc()" >Objets Connectés</a></li>
         </ul>
        </div>
      </div>
      <div class="electroligne">
         <div class="electrocol">
          <h4><a href="">TV et Vidéo</a> </h4><!-- tv et video-->
           <ul>
            <li ><a href="#Téléviseurs" onclick="showtv()">Téléviseurs</a></li>
            <li ><a href="#Vidéoprojecteurs" onclick="showvideo()">Vidéoprojecteurs</a></li>
            <li><a href="#Accessoirestv" onclick="showacctv()">Accessoires</a></li>
           </ul>
          </div>
         <div class="electrocol">
          <h4><a href="">Caméras et Drones</a></h4><!--camera et drones-->
          <ul>
            <li ><a  href="#Caméras" onclick="showcam()">Caméras</a></li>
            <li ><a href="#Drones" onclick="showdro()">Drones</a></li>
            <li ><a href="#Accessoires" onclick="showaccdro()">Accessoires</a></li>
          </ul>

         </div>
      </div>
    </div><!--home-->
    <div onpointerleave="closemenu()" onpointerleave="closemenu()"onmouseenter="openmenu()" onmouseleave="closeNav4()" id="home">
      <h2>Maison</h2>
      <div class="row ">
        <div class="col-md-4 ssmenu ">
         <a href=""> <h4> Cuisine </h4></a><!--cuisine-->
         <ul>
          <li >  <a  href="#arts" onclick="setVisibility()">Arts De La Table</a></li>
          <li><a>Accessoires</a></li>
          <li > <a  href="#gadgets" onclick="Vis1()">Gadgets</a></li>
          <li  > <a  href="#machines" onclick="Vis2()">Machines</a></li>
        </ul>
        </div>
        <div class="col-md-4 ssmenu">
          <a href=""> <h4> Décoration </h4></a><!--decoration-->
          <ul>
            <li>Décoration murale</li>
            <li>Luminaires et Éclairage</li>
            <li> Miroirs</li>
            <li> Meubles décoratifs</li>
          

          </ul>
        </div><div class="col-md-4 ssmenu">
          <a href=""> <h4> Rangements </h4></a><!--ragement-->
          <ul>
            <li>Salle de bain</li>
            <li>Cuisine</li>
            <li>Chambre à coucher</li>
            <li> Salon</li>


          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 ssmenu">
          <a href=" "> <h4> Chambres </h4></a><!--chambres-->
          <ul>
            <li  > <a href="#lits" onclick="Vis3()">Lits </a></li>
            <li> <a href="#matelas" onclick="Vis4()">Matelas</a></li>
            <li>  <a href="#couvertures" onclick="Vis5()">Couvertures</a></li>
            <li>  <a href="#Rideaux" onclick="Vis6()"  >Rideaux</a></li>
            
          </ul>
        </div>
        <div class="col-md-4 ssmenu">
          <a href=""> <h4> Salon </h4></a><!--salon-->
          <ul>
            <li>Canapès</li>
            <li>Tables</li>
            <li>Chaises</li>
            <li>Tapis</li>

          </ul>
        </div><div class="col-md-4 ssmenu">
          <a href=""> <h4> Jardin </h4></a><!--jardin-->
          <ul>
            <li>Fournitures</li>
            <li>Plantes</li>
            <li>Accessoires</li>
            <li>Barbecues</li>
            

          </ul>
        </div>
       
      </div>
    </div>
 <!--****************************************************************************************************************-->
  <div  class="class-md-4"> <!--partie  de pub-->
   
  </div>


<!--partie de publicite
<div class="slide-pub" style="max-width:500px">
 
  <img class="mySlides" src="solde.png" style="width:160%">
  <img class="mySlides" src="solde0.png" style="width:160%">
  <img class="mySlides" src="sold3.png" style="width:160%">
  //<img class="mySlides image1" src="image1.jpg"  >
  <img class="mySlides" src="image2.jpeg" style="width:160%">
  <img class="mySlides" src="image3.jpeg" style="width:150%">
  <img class="mySlides" src="image5.png" style="width:150%">
  <img class="mySlides" src="image6.jpeg" style="height:50%">
 //</div>
//script de image de pub (slideshow)//
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>-->
<!--****************************************************************************************************************-->
<!--partie de produits-->
<!-- cuisine -->
<!-- **************************cuisine  art de table ******************************************-->
<div  id="arts" class="prod" >
  <div  class="all">
    <h1>Cuisine</h1>
  </div>
  <section  class="container">
    
    <!-- *****-->
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="home" AND souscategory="cuisine" AND sscategory="arts de table"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
          
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?>" onclick="displaydetail()">  <span class="fa fa-shopping-cart"></span></a>
       
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
 
    <!-- *****-->

  </section>
  </div>
    <!-- *****-->

  
  <!--partie de details de produits et choix de quantité commandée-->

<!--********************************************Gadgets ********************-->
<div id="gadgets" class="prod">
<div class="all">
  <h1>Cuisine</h1>
</div>
  <section   class="container">

  <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="home" AND souscategory="cuisine" AND sscategory="gadgets"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
           
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?>" onclick="displaydetail()">  <span class="fa fa-shopping-cart"></span></a>
         
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
  </section>
</div>

<!--************************************************************-->

<!--******************machines*****************************-->


<div id="machines" class="prod">
  <div class="all"><h1>Cuisine</h1></div>
    <section   class="container">
      

<?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="home" AND souscategory="cuisine" AND sscategory="machine" ');
while($don=$request->fetch()){ ?><div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">

            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?>" > <span class="fa fa-shopping-cart"></span></a>
       
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  </div>
   
<?php ;}?>
    </section>
</div>

<!--***********************lits**********************-->

<div id="lits" class="prod">
  <div class="all">
    <h1>Chambres</h1></div>
    <section class="container">
      
      
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="home" AND souscategory="chambres" AND sscategory="lits" ');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
           
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?>">  <span class="fa fa-shopping-cart"></span></a>
           
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
    </section>
    
    </div>
 


<!-- matelas-->

<div id="matelas" class="prod">
<div class="all">
  <h1>chambres</h1>
</div>
  <section   class="container">

  <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="home" AND souscategory="chambres" AND sscategory="matelas"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
           
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?> ">  <span class="fa fa-shopping-cart"></span></a>
      
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
  </section>
</div>
  
  <!--***************************************couvertures-->
  <div id="couvertures" class="prod">
    <div class="all"><h1>Chambres</h1></div>
      <section   class="container">
          <!-- ***********-->
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="home" AND souscategory="chambres" AND sscategory="couvertures"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
       
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?>">  <span class="fa fa-shopping-cart"></span></a>
           
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
      </section>
      
      </div>
    
  <!--*************************************Rideaux************************************-->
  <div id="Rideaux" class="prod">
    <div class="all"><h1>Chambres</h1></div>
      <section   class="container">
               <!-- ***********-->
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="home" AND souscategory="chambres" AND sscategory="rideaux"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
           
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?> ">  <span class="fa fa-shopping-cart"></span></a>
 
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
      </section>
      
      </div>
    

    <!------------------************vetements -->
<!--***********************homme-->
<!--****************************pantalons-->  
<div id="pantalonh" class="prod">
  <div class="all"><h1>Vetements de hommes</h1></div>
    <section   class="container">
      
     <!-- ***********-->
     <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="vetement" AND souscategory="hommes" AND sscategory="pantalons"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
       
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?>">  <span class="fa fa-shopping-cart"></span></a>
         
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
   
    </section>
    
    </div>
    
  
  <!--*********************************chemises-->  
<div id="chemises" class="prod">
  <div class="all"><h1>Vetements de hommes</h1></div>
    <section   class="container">
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="vetement" AND souscategory="hommes" AND sscategory="chemises"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
          
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?>">  <span class="fa fa-shopping-cart"></span></a>

           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
     

    </section>
    
    </div>


  <!--****************************vestes-->
  <div id="vestes" class="prod">
    <div class="all"><h1>Vetements de hommes</h1></div>
      <section   class="container">
          <!-- ***********-->
     <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="vetement" AND souscategory="hommes" AND sscategory="vestes"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
         
            <a  href="detaileprod.php?id=<?php echo $don['id_prod'];?>">  <span class="fa fa-shopping-cart"></span></a>
           
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
     
      </section>
      
      </div>
      
    
    <!-- *************************PARTIE ELECTRONIQUE PRODUITS -->
    <!-- ordinateurs-->
    <div id="ordinateur" class="prod">
    <div class="all"><h1>Informatique</h1></div>
      <section   class="container">
               <!-- ***********-->
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="electro" AND souscategory="informatique" AND sscategory="ordinateur"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
         
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?> ">  <span class="fa fa-shopping-cart"></span></a>
     
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
      </section>
      
      </div>
    
   <!-- Imprimantes Et Scanners-->
   <div id="imprimantes" class="prod">
    <div class="all"><h1>Informatique</h1></div>
      <section   class="container">
               <!-- ***********-->
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="electro" AND souscategory="informatique" AND sscategory="imprimantes"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
           
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?>">  <span class="fa fa-shopping-cart"></span></a>
         
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
      </section>
      
      </div>

     <!-- périphérique-->
     <div id="périphérique" class="prod">
    <div class="all"><h1>Informatique</h1></div>
      <section   class="container">
               <!-- ***********-->
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="electro" AND souscategory="informatique" AND sscategory="périphérique"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
           
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?> ">  <span class="fa fa-shopping-cart"></span></a>
           
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
      </section>
      
      </div>
   <!-- ********************************************************************************************-->

      <!-- Tv video-->
     <!--Téléviseurs-->
     <div id="Téléviseurs" class="prod">
    <div class="all"><h1>Tv & Vidéo</h1></div>
      <section   class="container">
               <!-- ***********-->
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="electro" AND souscategory="Tv" AND sscategory="Téléviseurs"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?>">  <span class="fa fa-shopping-cart"></span></a>
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
      </section>
      
      </div>
   <!-- **************************************************************************-->

        <!--Téléviseurs-->
     <div id="Vidéoprojecteurs" class="prod">
    <div class="all"><h1>Tv & Vidéo</h1></div>
      <section   class="container">
               <!-- ***********-->
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="electro" AND souscategory="Tv" AND sscategory="Vidéoprojecteurs"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?> ">  <span class="fa fa-shopping-cart"></span></a>
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
      </section>
      
      </div>

       <!-- **************************************************************************-->

        <!--Téléviseurs-->
     <div id="Accessoirestv" class="prod">
    <div class="all"><h1>Tv & Vidéo</h1></div>
      <section   class="container">
               <!-- ***********-->
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="electro" AND souscategory="Tv" AND sscategory="Accessoirestv"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?>">  <span class="fa fa-shopping-cart"></span></a>
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
      </section>
      
      </div>
      <!-- **************************************************************************-->

        <!--Mobiles-->
        <!--Smartphones-->
     <div id="Smartphones" class="prod">
    <div class="all"><h1>Tv & Vidéo</h1></div>
      <section   class="container">
               <!-- ***********-->
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="electro" AND souscategory="mobile" AND sscategory="Smartphones"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?>">  <span class="fa fa-shopping-cart"></span></a>
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
      </section>
      
      </div>
        <!-- **************************************************************************-->

        <!--Mobiles-->
        <!--Tablettes-->
     <div id="Tablettes" class="prod">
    <div class="all"><h1>Tv & Vidéo</h1></div>
      <section   class="container">
               <!-- ***********-->
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="electro" AND souscategory="mobile" AND sscategory="Tablettes"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?>">  <span class="fa fa-shopping-cart"></span></a>
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
      </section>
      
      </div>
      </div>
        <!-- **************************************************************************-->

        <!--Mobiles-->
        <!--Tablettes-->
     <div id="Objets Connectés" class="prod">
    <div class="all"><h1>Tv & Vidéo</h1></div>
      <section   class="container">
               <!-- ***********-->
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="electro" AND souscategory="mobile" AND sscategory="Objets Connectés"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?>">  <span class="fa fa-shopping-cart"></span></a>
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
      </section>
      
      </div>
        <!-- **************************************************************************-->

        <!--Camera et drones-->
        <!--Caméras-->
     <div id="Caméras" class="prod">
    <div class="all"><h1>Tv & Vidéo</h1></div>
      <section   class="container">
               <!-- ***********-->
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="electro" AND souscategory="camera et drones" AND sscategory="Caméras"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?> ">  <span class="fa fa-shopping-cart"></span></a>
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
      </section>
      
      </div>
        <!-- **************************************************************************-->

        <!--Camera et drones-->
        <!--Drones-->
     <div id="Drones" class="prod">
    <div class="all"><h1>Tv & Vidéo</h1></div>
      <section   class="container">
               <!-- ***********-->
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="electro" AND souscategory="camera et drones" AND sscategory="Drones"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?> ">  <span class="fa fa-shopping-cart"></span></a>
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
      </section>
      
      </div>
         <!-- **************************************************************************-->

        <!--Camera et drones-->
        <!--Drones-->
     <div id="Accessoires" class="prod">
    <div class="all"><h1>Tv & Vidéo</h1></div>
      <section   class="container">
               <!-- ***********-->
    <?php 
include_once("conprod.php");
$request=$conn->query('SELECT * FROM produits where category="electro" AND souscategory="camera et drones" AND sscategory="Accessoires"');
while($don=$request->fetch()){ ?>
<div class="row">
 <div class="col-md-4 ">
          
          <div class="image"><img src="<?php echo $don['img']?>">
           
            <div class="icons">
       
            <a href="detaileprod.php?id=<?php echo $don['id_prod'];?>">  <span class="fa fa-shopping-cart"></span></a>
           
           </div>
        </div>
          <div class="infoprod">
           <h5><a href="#" > <?php echo $don['nom']?></a></h5>
           <div class="prix"> <?php echo $don['prix']?> <strong>DH</strong></div>
           </div>
            
   </div>  
  </div>
   
<?php ;}?>
   <!-- ***********-->
      </section>
      
      </div>
      <!--*******************************************************************************-->
   


   <!--  *********   PARTIE   FOOTER   -->


  
<footer id="footer"  >
<div class="globalf">
<div class="curvef"></div>
       <div class="containerf">
        
         <div class="rowfooter">
           <div class="colfooter1" id="div1f">
               <h6>Services</h6>
                 <ul>
                <li><a href="#">Livraison & installation</a></li>
                <li><a href="#">Service Après Vente</a></li>
                <li><a href="#">Retour & Remboursement</a></li>
                <li><a href="#">Finnacement & Crédit Gratuit</a></li>
               </ul>

           </div>
          <div class="colfooter1" id="div2f">
             <h6>À Propos</h6>
             <ul>
             <li><a href="#">Qui sommes nous?</a></li>
             <li><a href="#">Nos magasins</a></li>
             <li><a href="#">Équipe</a></li>
             <li><a href="#">Carrières</a></li>
            </ul>

          </div>
          <div class="colfooter1" id="div3f">
             <h6>Légal</h6>
             <ul>
             <li><a href="#">Termes & Conditions</a></li>
             <li><a href="#">Politique de confidentialité</a></li>
             <li><a href="#">Conditions d'utilisation</a></li>
             <li><a href="#">Sécurité</a></li>
             </ul>

          </div>
         
   
       </div>
       <div class="socialf">
          <h6>Suivez Nous</h6>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          </div>
       <p class="copyrightf"> &copy; Copyright All rights reserved. </p>
       
       </div>
 </div>
</footer>


<!--  ********* FIN  PARTIE   FOOTER   -->
</body>
</html>
