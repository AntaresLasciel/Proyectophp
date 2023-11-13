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

$idproducto = $_POST['idpro'];

 

    $tipo = $_POST['tipo'];

    $cat = $_POST['cat'];

    $nombreP = $_POST['nompro'];

    $precio = $_POST['precio'];

    $cantidad = $_POST['cantidad'];

   

    $consulta= "UPDATE producto SET Id_TipoProduc='$tipo', id_CAT='$cat', Nombre_Producto='$nombreP' , Cantidad_Disponible	='$cantidad' , Precio_Producto='$precio' WHERE Id_Producto ='$idproducto'";

 

    mysqli_query($conexion, $consulta);

 

    echo "

 

<fieldset align ='center'>

    <legend><strong> Actualizar Producto</strong></legend>

    <p>Los datos han sido actualizados con exito.</p>

</fieldset>";

 

mysqli_close($conexion);

?>