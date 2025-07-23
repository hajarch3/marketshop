<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
 
        <link  href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" rel="stylesheet">        <!--Link OF BOOTSRAP-->   
       <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   -->  
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    

    <title>Admin</title>
    <style>


      table{
       
        width:80%;
        position:absolute;
        margin-top: 2%;
        left:5%;
        top:16%;
        margin-left:5% ;
      
        
      }
      table th{
        text-align:center;
       
        background-color:orange;
      }
      table td{
        background-color:beige;
      text-align: center;
        align-items:center;
        height:70%;
      }
      h1{
     font-family:cursive;
     
      text-align:center;
     margin-top:-2%;
      }
      
     
    </style>
</head>
<body>
  <!--les droits d'admin-->
  <div>
  <a href="pageadmin.html"> <button class="btnback" ><span class="material-symbols-outlined">arrow_back</span></button></a>

  <h1>Espace d'administration</h1>

<table border="2">
        <tr>
            <th>ID_Produit</th>
            <th>Image</th>
            <th>NOM</th>
            <th>PRIX(DH)</th>
            <th>PROMO(%)</th>
            <th>id_Client</th>
            <th>catégorie</th>
             <th>Quantite</th>
            <th>Sous Category</th>
            <th>S_Sous Category</th>
            <th colspan="3">Actions</th>
    </tr>
   
   <?php

$connexion=new mysqli("localhost","root","","login");
$requete="SELECT * FROM produits ";
$resultat=$connexion->query($requete);

  
    while($p=$resultat->fetch_assoc()){ 
      echo"
      <tr>
      <td>$p[id_prod]</td>
      <td>$p[img]</td>
      <td>$p[nom]</td>
      <td>$p[prix]</td>
      <td>$p[promo]</td>
      <td>$p[id_client]</td>
      <td>$p[category]</td>
      <td>$p[quantite]</td>
      <td>$p[souscategory]</td>
      <td>$p[sscategory]</td>

      <td>
      <a   href='del.php?id_prod=$p[id_prod]' ><span  class='material-symbols-outlined'>
      delete
      </span></a> </td>
      <td>
      <a   href='adminedite.php?id=$p[id_prod]' ><span  type='submit' class='material-symbols-outlined'>
      edit_square
      </span></a></td>
     
      
      

     
      

      </tr>

      "; }
 
   ?>
</table>
</div>
</body>
</html>