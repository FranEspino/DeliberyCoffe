<?php 

$server = "localhost";
$username="id12679672_root";
$password= "frapo420";
$database= "id12679672_pedidos";

try{
    $connect = new PDO("mysql:host=$server;dbname=$database",$username,$password);

}catch(PDOException $e){
    die('Conexión fallida: '.$e->getMessage());
}

?>