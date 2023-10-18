<?php

$hostname ="localhost";
$username ="khasank@hotmail.de";
$password ="kolopi123";
$dbname ="tveds";


$con = mysqli_connect($hostname,$username,$password,$dbname);

if($con) 
{
    echo "Conncetion successful";
}
else{
    echo "There was a problem";
}

?>