<?php

require_once("conectar.php");

$conectarbd="conectarBDPDO";
$nombre=$_POST['nombre'];
$correo =$_POST['correo'];
$texto = $_POST['mensaje'];
$insertar="INSERT INTO clientes
( 
`cli_nombre`, 
`cli_correo`,
`cli_asunto`
)
VALUES
('$nombre','$correo','$texto')";

$registros = $conectarbd()->exec($insertar);
if($registros){
echo("Se han actualizado $registros registros");
}else{
    echo("Error: No se pudieron actualizar los registros");
}
?>