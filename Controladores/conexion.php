<?php
$servidor ='localhost';
$usuario ='root';
$contraseña ='Chachoman1992.';
$db= 'telas';

try{

  $conexion = new PDO("mysql:host=$servidor;dbname=telas",$usuario,$contraseña);
  $conexion->setAttribute (PDO::ATTR_ERRMODE,  PDO ::ERRMODE_EXCEPTION);
  echo"conexion realizada con exito";

}
catch(PDOException $e){
    echo "la conexion ha fallado:".$e->getMessage();   
}

$conexion=null;

?>
