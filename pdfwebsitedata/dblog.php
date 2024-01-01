<?php

$localhost ="localhost";
$dbusername="root";
$dbpassword="";
$dbname="pdfwebsite";

$conn=mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
if(!$conn){
    echo "connection failed";
    exit();
}

?>
