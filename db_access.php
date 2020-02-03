<html>
    <body>
       <h1>Enviado</h1> 
    </body>
</html>
<?php
$hostname_localhost="localhost";
$database_localhost="prueba";
$username_localhost="root";
$password_localhost="";

$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

$name=add($_POST["name"]);
$lastName=add($_POST["lastname"]);
$fecha_pedido=add($_POST["fecha_pedido"]);
$fecha_actual=add(date("Y-m-d h:i:s"));
echo $fecha_actual;

function add($data){
    return "'".$data."'";

}

$consulta="INSERT INTO lista (nombre, apellido, fecha_actual, fecha_pedido) VALUES ($name, $lastName, $fecha_actual,$fecha_pedido)";
$resultado=mysqli_query($conexion,$consulta);
if($resultado){
    echo "Se envio con exito";
}
mysqli_close($conexion);

?>
