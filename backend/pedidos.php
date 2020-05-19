<?php 
require '../databases.php';
if(!empty($_POST['pedido'])){
 $pedido = $_POST['pedido'];
}
$pedido = "Café";
date_default_timezone_set('America/Lima');
$fecha = date('l jS \of F Y h:i:s A');
$errores = "";

if(isset($_POST['Enviar'])){
    if(!empty($_POST['Nombre'])){
        $nombre = $_POST['Nombre'];
        $nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
        $nombre = htmlspecialchars($nombre);
      
    }else{
        $errores .="Ingresa tu Nombre. </br>";
    }

    if(!empty($_POST['Direccion'])){
        $direccion = $_POST['Direccion'];
        $direccion = filter_var($direccion,FILTER_SANITIZE_STRING);
        $direccion = htmlspecialchars($direccion);
    }else{
        $errores .= "Ingresa tu Dirección. </br>";
    }

    if(!empty($_POST['Celular'])){
        $celular = $_POST['Celular'];
        $celular = filter_var($celular,FILTER_SANITIZE_STRING);
        $celular = htmlspecialchars($celular);
    }else{
        $errores .= "Ingresa tu numero de celular. </br>";
    }

}

if(empty($errores) && isset($_POST['Enviar'])){
    $query = 'INSERT INTO pedido(Id,Nombre,Direccion,Celular,Pedido,Fecha) VALUES(null, :nombre , :direccion, :celular, :pedido, :fecha)';
    $statement = $connect->prepare($query);
    $statement->execute(array(
        ':nombre' => $nombre,
        ':direccion' => $direccion,
        ':celular' => $celular,
        ':pedido' => $pedido,
        ':fecha' => $fecha
    ));


    header("location: https://prueba-fraporitmos.000webhostapp.com");


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pedididos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="../img/icon.png">
    <title>Delibery Coffe</title>

</head>

<body>
    

    <form class="pedido" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
        <input type="text" name="Nombre" placeholder="Ingresa tu nombre" value="<?php if(isset($_POST['Enviar']) && !empty($_POST['Nombre'])){ echo $_POST['Nombre']; }else{ echo "";}  ?>"> 
        <input type="text" name="Direccion" placeholder="Ingresa tu dirección" value="<?php if(isset($_POST['Enviar']) && !empty($_POST['Direccion'])){ echo $_POST['Direccion']; }else{ echo "";}  ?>">
        <input type="hidden" name="Pedido" value="<?php echo $pedido; ?>" >
        <input type="text" name="Celular" placeholder="Ingresa tu numero" value="<?php if(isset($_POST['Enviar']) && !empty($_POST['Celular'])){ echo $_POST['Celular']; }else{ echo "";}  ?>">
        <input id="boton" type="submit"  name="Enviar" class="btn btn-primary" value="Enviar">
           <?php if(!empty($errores) && isset($_POST['Enviar'])): ?>
            <div class="alert alert-danger" role="alert">
            <?php echo $errores?>
            </div>
            
            


            <?php endif ?>
    </form>
    


</body>
</html>