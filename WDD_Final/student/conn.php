<html>
<head>
    <title>OE4_WORLD_DEV</title>
</head>
<body>
<?php
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'it15_database');

$dbc = @mysqli_connect (DB_HOST, DB_USER,DB_PASSWORD, DB_NAME);


if(isset($_POST ['sub'])){
if($dbc){

    $fn = $_REQUEST['fname'];
    $ln = $_REQUEST['lname'];
    $em = $_REQUEST['email'];
    $gender = $_REQUEST['gender'];
    $ad1 = $_REQUEST['ad1'];
    $pas = $_REQUEST['pass'];
    $date = $_REQUEST['date'];
    $query = "INSERT INTO users_tbl(FirstName, Lastname, gender, Birthdate,Email,Address,Password,regs_date) VALUES ('$fn','$ln', '$gender','$date','$em','$ad1','$pas',NOW())";

   $result =  @mysqli_query($dbc, $query);

    if (!$result) {
        echo  "Fail to add user";
    }
    else {
        echo "<script> alert('Added to the database!') </script>";
        include("dashboard.php");
    } 
}
else {
    exit(mysqli_connect_error());
}
mysqli_close($dbc);
}
?>