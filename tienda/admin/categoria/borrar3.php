<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Categoria</title>
</head>
<body>
  
<?php

$db_host="localhost";
$db_nombre="tienda";
$db_usuario="root";
$db_contra="antares13659";

$conexion= mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

if(!$conexion)
{
    echo"<h3>No se ha podido conectar PHP - Mysqol, verifique sus datos.</h3><hr><br>";
}

{
    echo"<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
}

session_start();
if (!isset($_SESSION['logged'])) {
    header('Location: ../index.html');
}


$ced = $_POST['idcat'];

$consulta= "DELETE FROM categoria WHERE id_Cat ='$ced'";

 

    mysqli_query($conexion, $consulta);

 

    echo "

 

<fieldset align ='center'>

    <legend><strong> Borrar Categoria</strong></legend>

    <p>La Categoria ha sido borrado.</p>

</fieldset>";

 

mysqli_close($conexion);

?>
</body>
</html>