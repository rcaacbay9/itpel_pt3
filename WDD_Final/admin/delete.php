<?php
require_once('connect.php');

$id = $_GET['id']; // get id through query string

$query = "DELETE FROM users_tbl where id = '$id'";

$del = mysqli_query($dbc,$query); // delete query


if($del)
{
    mysqli_close($dbc); // Close connection
    header("location:dashboard.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

?>