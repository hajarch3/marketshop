<?php session_start();

?>
<!-- page de login-->
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
    

 
   <div class="login animate"id="login">
        <h1>Login</h1>
       <a href="acceuil.php"> <button class="btnclose"> <span class="material-symbols-outlined"> close</span></button></a>
   
        <form action="connecter.php" method="post">

        <label for="username" id="username" ><i class="material-symbols-outlined"> person </i></label>
        <input type="text" placeholder="email" name="email">
        <br><br>
        <label for="password" id="password" ><i class="material-symbols-outlined">lock</i></label>
        <input type="password" placeholder="********" name="password">
        <?php 
                    if(isset($_SESSION['error_login'])){
                        echo '<p class="error-message">' . $_SESSION['error_login'] . '</p>';    
                         
                    }
              ?>
        <br>
        <br>
        
        <button type="submit" id="btnlogin">Login</button>
      <button type="submit" id="btnlogin"><a href="signup.php">SignUp</a></button>
    
        </form>
        <p>vous n'êtes pas membre avec nous? <a href="signup.php">SignUp</a></p>
    </div>





   



</body>
</html>