<?php
$conn= mysqli_connect('localhost','root');
if($conn){
    echo "Conection successful";
}
else{
    echo "No Connection";
}
?>