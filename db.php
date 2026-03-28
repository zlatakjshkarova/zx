<?php
$host="localhost";

$username="root";
$password="mysqli";
$database="red";


$conn = new mysqli($host, $username,  $password, $database);

if($conn->connect_error){
    die('ошибка'.$conn->connect_error);
}
echo'dgkdgdo';

?>
