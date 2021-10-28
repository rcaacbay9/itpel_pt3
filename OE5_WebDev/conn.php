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
    echo 'You are connected <br>';
    $fn = $_REQUEST['fname'];
    $ln = $_REQUEST['lname'];
    $em = $_REQUEST['email'];
    $ad1 = $_REQUEST['ad1'];
    $ad2 = $_REQUEST['ad2'];
    $ad0 = $_REQUEST['ad0'];
    $Ad = $ad0 . " " . $ad1 ." ". $ad2;
    $pas = $_REQUEST['pass'];
    $dy = $_REQUEST['day'];
    $mt = $_REQUEST['month'];
    $yr = $_REQUEST['year'];
    $date = $mt . " ". $dy ." ". $yr; 
    $fdate = date('d/m/Y', strtotime($date));

    $query = "INSERT INTO users_tbl(FirstName, Lastname, Birthdate,Email,Address,Password,regs_date) VALUES ('$fn','$ln','$fdate','$em','$Ad','$pas',NOW())";

   $result =  @mysqli_query($dbc, $query);

    if (!$result) {
        echo  "Fail to add user";
    }
    else {
        echo "Sucesss!";
    } 
}
else {
    exit(mysqli_connect_error());
}
mysqli_close($dbc);
}
?>