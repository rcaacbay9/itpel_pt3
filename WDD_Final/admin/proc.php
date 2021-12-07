<?php 
require_once("connect.php");

if (isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];


    $login_query = "SELECT userName, passWord from admin_tbl where userName = '$user' AND passWord = '$pass' ";
   

    $result = mysqli_query($dbc, $login_query);
    
    if(mysqli_num_rows($result)){
        echo "<script>alert('Logged in!')</script>";
        include("dashboard.php");
         $_SESSION['Email'] = $user;
        
    }
    else {
        echo '<script> alert("Wrong Password! Try it again!")</script>';
        include("main.html");
    }

}

?>