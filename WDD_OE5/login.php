<?php 
require_once("connect.php");

if (isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];


    $login_query = "SELECT username, password from admin_tbl where username = '$user' AND password = '$pass' ";
   

    $result = mysqli_query($dbc, $login_query);
    
    if(mysqli_num_rows($result)){
        echo "<script>alert('Logged in!')</script>";
        include("dashboard.php");
         $_SESSION['Email'] = $user;
        
    }
    else {
        echo '<script> alert("Oh no bro! wrong password")</script>';
        include("adminL.html");
    }

}

?>