<?php 
require_once("connect.php");

if (isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];



    $login_query = "SELECT FirstName, LastName, Email, BirthDate, gender, Address, Password , id , regs_date from users_tbl where Email = '$user' AND Password = '$pass' ";
   

    $result = mysqli_query($dbc, $login_query);
    
    if(mysqli_num_rows($result)){
        $row=mysqli_fetch_assoc( $result );
        $id=$row['id'];
        $fn=$row['FirstName'];
        $ln=$row['LastName'];
        $bday=$row['BirthDate'];
        $gnd=$row['gender'];
        $add=$row['Address'];
        $rd=$row['regs_date'];
        echo "<script>alert('Logged in!')</script>";
        include("dashboard.php");
         $_SESSION['Email'] = $user;
         $_SESSION['id'] = $id;
         $_SESSION['FirstName'] = $fn;
         $_SESSION['LastName'] = $ln;
         $_SESSION['BirthDate'] = $bday;
         $_SESSION['gender'] = $gnd;
         $_SESSION['Address'] = $add;
         $_SESSION['regs_date'] = $rd;
    }
    else {
        echo '<script> alert("Wrong Password! Try it again!")</script>';
        include("studentL.html");
    }

}

?>