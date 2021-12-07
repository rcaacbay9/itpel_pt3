<?php
    session_start();

?>
<html> 
    <head>
        <title>Admin Dashboard</title>
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
  width:1250px;
  border-radius:5px;
  margin: 0 auto 0 auto;
  padding:0px 0px 150px 0px;
  border: #2980b9 5px solid;
  display: table;

}
.logout{
  float: right;
    
}
h1{
  font-size:1.5em;
  color:#525252;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

th, td {
  padding: 10px;
}
    </style>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
<body>
    <div class = "box">
    <center>
    <h1> WELCOME <?php echo $_SESSION['Email'];?></h1> 
    <br>
<table border = "1">
  <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Registration Date</th>
    <th style="border-top-style: hidden; border-right-style: hidden;" > </th>
  </tr>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'it15_database');
$query = "SELECT * FROM users_tbl";
$query_run = mysqli_query($connection, $query);

if (mysqli_num_rows($query_run)>0){
    foreach($query_run as $row){
        ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['FirstName']; ?></td>
            <td><?= $row['LastName']; ?></td>
            <td><?= $row['Email']; ?></td>
            <td><?= $row['Address']; ?></td>
            <td><?= $row['regs_date']; ?></td>
            <td><a class="btn btn-primary" href = 'update.php?id=<?=$row['id'];?>' role = "button"> Update
            <a class="btn btn-outline-danger" href = 'delete.php?id=<?=$row['id'];?>' role = "button" onclick="return confirm('do you want to delete Y/N')"> Delete</td>
        </tr>
        
        <?php
        
    }
}

?>
</table>

</center>
<div class = "logout">
<a class="btn btn-outline-danger btn-lg" href = "adminL.html"   style="position: absolute;right:0;top:0;"  >Logout</a></div>
</div>
</body>
</hmtl>