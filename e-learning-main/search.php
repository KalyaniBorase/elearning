<?php
$courses = $_POST['courses'];

if(strlen($courses)>20 or strlen($courses)<2)
{
    
    echo 'window.location = "http://localhost/e-learning-main/courses.php";';
    
}
else
{
    include 'db_connect.php';
}
?>
