<?php
$localhost = "localhost";
$database = "control";
$user = "root";
$pass = "";
$conect = mysqli_connect($localhost,$user,$pass,$database);
if(isset($conect)){
    echo("hay coneccion");
}else{
    echo("error");
}




?>