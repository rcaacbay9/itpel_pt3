<?php
    session_start();


?>

<html> 
    <head>
        <title>WEBDEV_OE5</title>
        <style>
            body{
     font-family: 'Open Sans', sans-serif;
     background:#3498db;
     margin: 0 auto 0 auto;  
     width:100%; 
     text-align:center;
     margin: 20px 0px 20px 0px;   
   }
   .box{
  background:white;
  width:250px;
  border-radius:5px;
  margin: 0 auto 0 auto;
  padding:0px 0px 150px 0px;
  border: #2980b9 5px solid;
  
}
h1{
  font-size:1.5em;
  color:#525252;
}


    </style>
    </head>
<body>
    <div class = "box">
    <h1> WELCOME </h1> <?php
    echo $_SESSION['Email'];
  
    
    ?>
    <br><br>
    <h2> <a href = "login.php">Logout</a></h2> </div>
</body>
</hmtl>