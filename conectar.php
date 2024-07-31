<?php
function conectarBDPDO(){
require_once("config.php");
try{
  $conecction= new PDO($config['dsn'],$config['usuario'],$config['contrasena']);  
}catch(PDOException $e) {
echo $e->getMessage();
exit();
}
//Imprimir mensaje de exito
echo("Conexion correcta");
return $conecction; 
echo("Conexion correcta");
}
?>
