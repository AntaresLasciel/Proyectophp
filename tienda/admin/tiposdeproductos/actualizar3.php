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


$ced = $_POST['idtprod'];

 

    $tipoproducto = $_POST['nomtprod'];

    

   

    $consulta= "UPDATE tiposdeproductos SET tipo_Producto='$tipoproducto' WHERE Id_tipoProduc ='$ced'";

 

    mysqli_query($conexion, $consulta);

 

    echo "

 

<fieldset align ='center'>

    <legend><strong> Actualizar Tipo de Producto</strong></legend>

    <p>Los datos han sido actualizados con exito.</p>

</fieldset>";

 

mysqli_close($conexion);

?>