<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="../../css/style1.css" />
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


?>

<?php

 

session_start();
if (!isset($_SESSION['logged'])) {
    header('Location: ../login.html');
}

 

$ced=$_GET["ced"];

 

$consulta="SELECT * FROM producto WHERE Id_Producto ='$ced'";

 

if ($resultado=mysqli_query($conexion, $consulta)){

 

    $row = mysqli_fetch_array($resultado);

 

 

    echo "

 

    <div align='center'>

        <table border='0' width='600' style='font-family: Verdana; font-size: 8pt' id='table1'>

            <tr>

                <td colspan='2'><h3 align='center'>Actualice los datos que considere</h3></td>

            </tr>

            <tr>

                <td colspan='2'>En los campos del formulario puede ver los valores actuales,

                si no se cambian los valores se mantienen iguales.</td>

            </tr>

 

            <form method='POST' action='actualizar3.php'>

                <tr>


                </tr>

               
 

                <tr>

                    <td width='50%'><p align='center'><b>Id Producto</b></td>

                    <td width='50%'><p align='center'><input type='text' name='idpro' size='20' value='$ced' disabled='disabled'></td>

                </tr>

               

                <tr>

                    <td width='50%'><p align='center'><b>Tipo Producto</b></td>

                    <td width='50%'><p align='center'><input type='text' name='tipo' size='20' value='".$row['Id_TipoProduc']."' ></td>

                </tr>

                <tr>

                    <td width='50%'><p align='center'><b>Categoria</b></td>

                    <td width='50%'><p align='center'><input type='text' name='cat' size='20' value='".$row['id_CAT']."' ></td>

                </tr>

                <tr>

                <td width='50%'><p align='center'><b>Nombre Producto</b></td>

                <td width='50%'><p align='center'><input type='text' name='nompro' size='20' value='".$row['Nombre_Producto']."' ></td>

                </tr>

                <tr>

                <td width='50%'><p align='center'><b>Cantidad Disponible</b></td>

                <td width='50%'><p align='center'><input type='text' name='cantidad' size='20' value='".$row['Cantidad_Disponible']."' ></td>

                </tr>


                <tr>

                <td width='50%'><p align='center'><b>Precio Producto</b></td>

                <td width='50%'><p align='center'><input type='text' name='precio' size='20' value='".$row['Precio_Producto']."' ></td>

                </tr>


                </tr>

                <input type='hidden' name='idpro' value='$ced'>

                <tr>

 

                    <td width='50%'></td>

                    <td width='50%'>

                    <input type='submit' value='Actualizar datos'/>

                    </td>

                </tr>

            </form>

        </table>

    </div>";

 

 

 

}

 

?>
</body>
</html>