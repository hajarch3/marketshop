<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="js.js"></script>  
    <title>Document</title>
</head>
<body style="background-image: url(bgrd.png);background-size:100% ;
  background-repeat:no-repeat">
    





    <div class="signup animate" id="signup">
   <a href="connexion.php"> <button class="btnback" ><span class="material-symbols-outlined">arrow_back</span></button></a>
   
   

        <h1>Sign Up</h1>
         <form action="login.php" method="post">
            <input type="text" placeholder="Nom" name="nom">
            <input type="text" placeholder="Prenom" name="prenom">
            <input type="email" placeholder="Email" name="email">
            
            <input type="tel" placeholder="Numéro de Telephone" name="telephone">
            <input type="password"  placeholder="Mot de passe" name="password">
             <?php 
                    if(isset($_SESSION['error_email'])){
                        echo '<p class="error-message">' . $_SESSION['error_email'] . '</p>';    
                         
                    }
              ?>
            <button type="submit" id="btnsignup">Sign Up</button>
        </form>
       <p> Si vous cliquez sur <strong>Sign Up</strong> vous acceptez notre conditions et la politique de confidentialité</p>

    </div>

</div>

</body>
</html>