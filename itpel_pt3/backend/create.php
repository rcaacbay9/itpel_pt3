<?php
require_once("config.php");
$input = file_get_contents('php://input');
$data = json_decode($input,true);
$id = $data['student_num'];
$studentName = $data['student_name'];
$studentcourse = $data['student_course'];
$studentyear = $data['student_year'];
$address = $data['address'];
$message = array();

$query = mysqli_query($con, "INSERT INTO itpeldb (id, name, course, year,Address) VALUES ('$id','$studentName','$studentcourse', '$studentyear','$address' )"); 

if ($query){
    http_response_code(201);
    $message['status'] = "Success";
}
else {
    http_response_code(422);
    $message['status'] = "Error";
}
echo json_encode($message);
echo mysqli_error($con);

?>