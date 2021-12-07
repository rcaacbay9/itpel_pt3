<html>
<head>
<style>
      body {
                background-color: whitesmoke;
            }
            input {
                width: 40%;
                height: 5%;
                border: 1px;
                border-radius: 05px;
                padding: 8px 15px 8px 15px;
                margin: 10px 0px 15px 0px;
                box-shadow: 1px 1px 2px 1px grey;
               text-align: center;
            }
            .btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
    </style>


</head>
<body>
<?php

include_once("connect.php");

$id = $_GET['id']; 

$find = "select * from users_tbl where id='$id'" ; 

$qry = mysqli_query($dbc,$find); 

$data = mysqli_fetch_array($qry); 

if(isset($_POST['update'])) 
{
    $id = $_POST['id'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $bday = $_POST['bday'];
    $email = $_POST['email'];
    $adrs = $_POST['adrs'];
    $password = $_POST['pass'];


	
    $edit = mysqli_query($dbc,"update users_tbl set id = '$id', FirstName = '$firstname', LastName = '$lastname', BirthDate = '$bday', 
    Email = '$email' , gender = '$gender' Address = '$adrs' , pass = '$password' where id='$id'");
	
    if($edit)
    {
         
        header("location:dashboard.php"); 
    }
    else
    {
        echo mysqli_error();
    }    	
}   
?>
<center>
<h1>Update Data of ID: <?php echo $data['FirstName'] . " " .$data['LastName']?></h1>


<form method="POST">
  <b><center> ID </center>
  <input type = "text" name = "id"  value = "<?php echo $data['id']?>" readonly="readonly"/> <br>
  <center> First Name </center>
  <input type = "text" name = "fname"  value = "<?php echo $data['FirstName'] ?>"readonly="readonly"/><br>
  <center> Last Name </center>
  <input type = "text" name = "lname"  value = "<?php echo $data['LastName'] ?>"readonly="readonly"/><br>
  <center> Gender </center>
  <input type = "text" name = "gender"  value = "<?php echo $data['gender'] ?>"readonly="readonly"/><br>
  <center> Student Address </center>
  <input type = "text" name = "adrs"  value = "<?php echo $data['Address']?>"readonly="readonly"/><br>
  <center> Email Address </center>
  <input type = "text" name = "email"  value = "<?php echo $data['Email']?>"/><br>
  <center> Birthday </center>
  <input type = "date" name = "bday"  value = "<?php echo $data['BirthDate']?>"readonly="readonly"/><br>
  <center> Registered Date </center>
  <input type = "text" name = "reg"  value = "<?php echo $data['regs_date']?>" readonly="readonly"/><br>
  <input type="submit" name="update" value="Update">
</form>
</cemter>
</body>
</html>