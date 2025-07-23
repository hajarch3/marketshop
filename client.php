<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
 
    <style>
       table{
       
       width:80%;
       position:relative;
       margin-top: 2%;
       left:9%;
       top:17%;
       border-collapse:collapse;
       border:none;
       
       
     }
   
     table th{
       text-align:center;
      height:50px;
       background-color:orangered;
     }
     table td{
       background-color:wheat;
     text-align: center;
       align-items:center;
       height:30px;
     }
    
     
    
       
        h1{
            position: absolute;
            text-align:center;
            font-family:fantasy;
            margin-top:5%;
            margin-bottom:7%;
            left:40%
           
        }
    </style>
</head>
<body>
    <h1 id="header">CRUD des clients</h1><br><br>
    <a href="pageadmin.html"> <button class="btnback" ><span class="material-symbols-outlined">arrow_back</span></button></a>

<table  border="1">
        <tr  >
            <th>id</th><th>nom</th><th>prenom</th><th>email</th><th>telephone</th><th>password</th><th>poste</th><th colspan=2>action</th>
        </tr>
        <?php
    $conn = mysqli_connect("localhost", "root", "", "login");
    $req='SELECT * FROM client';
    $res=mysqli_query($conn,$req);?>
        <?php 
        if($res->num_rows > 0){
        while($row=mysqli_fetch_assoc($res)){
            echo"<tr><td>". $row["id_client"]."</td>
            <td>". $row["nom"]."</td>
            <td>". $row["prenom"]."</td>
            <td>". $row["email"]."</td>
            <td>". $row["telephone"]."</td>
            <td>". $row["password"]."</td>
            <td>". $row["poste"]."</td>
            <td><a href='editeclient.php?id_client=$row[id_client]'><span  type='submit' class='material-symbols-outlined'>
            edit_square
            </span></td>
            <td><a href='deleteclient.php?id_client=$row[id_client]'><span  class='material-symbols-outlined'>
            delete
            </span></a></td><tr>";
         }
        } 
        else{
            echo"no results";
        }
        $conn->close();
         ?>
        </table>
</body>
</html>