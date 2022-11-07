<?php
$user = 'root';
$pass = '';
$host = 'localhost';

$connection = mysqli_connect($host, $user, $pass);

$nombre =$_POST["nombre"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

/*if(!connection){

}
else
{
    echo "Hemos conectado al servidor";
}
$datab = "gonza";

$db = mysqli_select_db($connection,$datab);
if(!$db)
{
    echo "no se ha podido encontrar la tabla";
}
else
{
    echo "database seleccionada";
}
$instruccion_SQL = "INSERT INTO tabla (nombre, usuario, contraseña)
                    values($nombre, $usuario, $contraseña)";

*/