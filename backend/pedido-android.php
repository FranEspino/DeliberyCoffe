<?php 
require 'databases.php';
$pedido = "Café";
date_default_timezone_set('America/Lima');
$fecha = date('l jS \of F Y h:i:s A');
$Nombre = $_POST['Nombre'];
$Direccion = $_POST['Direccion'];
$Celular = $_POST['Celular'];

$query = 'INSERT INTO pedido(Id,Nombre,Direccion,Celular,Pedido,Fecha) VALUES(null, :nombre , :direccion, :celular, :pedido, :fecha)';
$statement = $connect->prepare($query);
$statement->execute(array(
    ':nombre' => $Nombre,
    ':direccion' => $Direccion,
    ':celular' => $Celular,
    ':pedido' => $pedido,
    ':fecha' => $fecha
));






?>