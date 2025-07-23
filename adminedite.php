<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>Document</title>
</head>
<body>
    <div class="ajouterprod" id="prod" style="display: block;">
        <div class="contenu" style=" position: relative;left: 20%; top: 5%;">
          <h1>Modification de Produit</h1>
          <a href="pageadmin.html"> <button class="btn"> <span class="material-symbols-outlined"> close</span></button></a>
       <?php if(isset($_GET['id'])){
   $id=$_GET['id'];
       ?>
           <form action="edit.php?id=<?php echo $id ;?>" method="post">
               
               <input type="text" name="nom" placeholder="Nom de Produit" required><br>
               <input type="number" name="prix"  placeholder="Prix de Produit" required>
               <input type="text" name="taille"  placeholder="Taille de Produit" ><br>
               <select name="nomcat" >
                 <!-- categories--> 
                     <option value="home">Home</option>
                     <option value="vetement">Vêtement</option>
                     <option value="electro">Electronique</option>
                     <option value="food">Food</option>
                     <option value="biblio">Bibliothéque</option>
                 </select>
            
             <input type="number" name="quantite" placeholder="Quantité de produit"><br>
               <input type="number" name="promo"  placeholder="Promotion" > 
                 <input type="file"  name="img"><br>
             <span> Sous Categories: </span>
             <select name="souscat" >
               <!-- sous menu--> name="nomcat"
                   <option value="cuisine">cuisine</option>
                   <option value="chambres">chambres</option>
                   <option value="informatique">Informatique</option>
                   <option value="Tv">TV & Vidéo</option>
                   <option value="mobile">Mobile</option>
                   
                   <option value="camera et drones">Caméra et Drones</option>
                   <option value="hommes">hommes</option>
               </select><br>
             <span>Type:</span> 
             <select name="s-souscat" >
               <!-- sous sous  menu-->
              
                   <option value="cuisine">arts de table</option>
                   <option value="gadgets">gadgets</option>
                   <option value="machine">machine</option>
                   <option value="pantalons">pantalons</option>
                   <option value="chemises">chemises</option>
                   <option value="vestes">Vestes</option>
       
                   <option value="lits">lits</option>
                   <option value="matelas">matelas</option>
                   <option value="Rideaux">Rideaux</option>
                   <option value="couvertures">couvertures</option>
                   <option value="rideaux">Rideaux</option>
                   <option value="ordinateur">Ordinateur</option>
                   <option value="imprimantes">Imprimantes</option>
                   <option value="périphérique">périphérique</option>
                 
                   <option value="Téléviseurs">Téléviseurs</option>
                   <option value="Vidéoprojecteurs">Vidéoprojecteurs</option>
                   <option value="Accessoirestv">Accessoires</option>
                   
                   <option value="Smartphones">Smartphones</option>
                   <option value="Tablettes">Tablettes</option>
                   <option value="Objets Connectés">Objets Connectés</option>
       
                   <option value="Caméras">Caméras</option>
                   <option value="Drones">Drones</option>
                   <option value="Accessoires">Accessoires</option>
       
               </select><br>
       
            
               <input  class="click" type="submit" value="Modifier Produit" name="submit"><br>
           </form><?php ;}?>
        </div>
       </div>
      
    <script>
           function showform(){
               document.getElementById("prod").style.display="block";
           }
       </script>
       
</body>
</html>