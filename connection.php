<?php 

$server = 'localhost';
$user = 'root';
$pass = 'admin';
$db = 'ecommercedb';

$connection = new mysqli($server, $user, $pass, $db);

if($connection -> connect_errno){
    die('Connection failed' . $connection -> connect_errno . ' <br />');
} else{
    echo 'Connection succesfull <br />';
}

?>