<?php
$connect = mysqli_connect("localhost", "root", "", "coaching");
if($connect){
    echo"Connected Successfull!!";
}
else{
    echo"Not Connected";
}
?>

