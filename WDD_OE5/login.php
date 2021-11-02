<?php 
require_once("connect.php");

if (isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];


    $login_query = "SELECT Email, Password, Firstname from users_tbl where Email = '$user' AND Password = '$pass' ";
   

    $result = mysqli_query($dbc, $login_query);
    
    if(mysqli_num_rows($result)){
        echo "<script>alert('Logged in!')</script>";
        include("dashboard.php");
         $_SESSION['Email'] = $user;
        
    }
    else {
        echo '<script> alert("Oh no bro! wrong password")</script>';
        include("main.html");
    }

}

?>