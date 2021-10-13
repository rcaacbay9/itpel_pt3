<html>
<head>
    <title>PRELIMS_WORLD_DEV</title>
</head>
<body>
      <center> 
<?php

    if(isset($_POST ['noice'])){
    $name = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $sAddress = $_REQUEST['sAdress'];
    $city = $_REQUEST['city'];
    $province = $_REQUEST['province'];
    $postal = $_REQUEST['postal'];
    $number = $_REQUEST['pNumber'];
    $email = $_REQUEST['q6_email6'];

    echo "<h2>Fullname:" . " " . $name . " " . $lname ;
    echo '<br/>';
    echo "<h2>Full Address: " . $postal . " " . $sAddress . ", " . $city . " " . $province;
    echo '<br/>';
    echo "<h2>Phone Number: " . $number;
    echo '<br/>';
    echo "<h2>Email: " . $email;
}
?></center>
</body>
</html>

