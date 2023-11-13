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

 

    $idcategoria = $_POST['nomcat'];

    

   

    $consulta= "UPDATE categoria SET nombre_Cat='$idcategoria' WHERE id_Cat ='$ced'";

 

    mysqli_query($conexion, $consulta);

 

    echo "

 

<fieldset align ='center'>

    <legend><strong> Actualizar Categoria</strong></legend>

    <p>Los datos han sido actualizados con exito.</p>

</fieldset>";

 

mysqli_close($conexion);

?>