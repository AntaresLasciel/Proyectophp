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
    header('Location: ../login.html');
}

$ced = $_POST['numped'];

 

    $idcl = $_POST['cedu'];

    $idproducto = $_POST['idpro'];

    $cantidap = $_POST['cantiprod'];

    $fechap = $_POST['dateped'];

   

    $consulta= "UPDATE pedido SET id_cl='$idcl', Id_Producto='$idproducto',  Cantidad_del_Producto='$cantidap' , Fecha_Ped='$fechap' WHERE Num_Pedido='$ced'";

 

    mysqli_query($conexion, $consulta);

 

    echo "

 

<fieldset align ='center'>

    <legend><strong> Actualizar Pedido</strong></legend>

    <p>Los datos han sido actualizados con exito.</p>

</fieldset>";

 

mysqli_close($conexion);

?>