<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Producto</title>
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


session_start();
if (!isset($_SESSION['logged'])) {
    header('Location: ../login.html');
}
?>

<?php

 

echo $_GET["ced"];

 

$ced=$_GET["ced"];

 

$consulta="SELECT * FROM producto WHERE Id_Producto ='$ced'";

 

if ($resultado=mysqli_query($conexion, $consulta)){

 

    $row = mysqli_fetch_array($resultado);

 

 

    echo "

 

    <div align='center'>

        <table border='0' width='600' style='font-family: Verdana; font-size: 8pt' id='table1'>

            <tr>

                <td colspan='2'><h3 align='center'>Está seguro que desea borrar este Producto?</h3></td>

            </tr>

            <tr>

                <td colspan='2'></td>

            </tr>

 

 

            <form method='POST' action='borrar3.php'>

                <tr>

                    
                </tr>

               

               

 

                <tr>

                    <td width='50%'><p align='center'><b>Id Producto</b></td>

                    <td width='50%'><p align='center'><input type='text' name='idpro' size='20' value='$ced' readonly='readonly'></td>

                </tr>

               

                <tr>

                    <td width='50%'><p align='center'><b>Tipo Producto</b></td>

                    <td width='50%'><p align='center'><input type='text' name='tipo' size='20' value='".$row['Id_TipoProduc']."' readonly='readonly' ></td>

                </tr>

                <tr>

                    <td width='50%'><p align='center'><b>Categoria</b></td>

                    <td width='50%'><p align='center'><input type='text' name='cat' size='20' value='".$row['id_CAT']."' readonly='readonly' ></td>

                </tr>

                <tr>

                <td width='50%'><p align='center'><b>Nombre Producto</b></td>

                <td width='50%'><p align='center'><input type='text' name='nombrep' size='20' value='".$row['Nombre_Producto']."' readonly='readonly' ></td>

                </tr>

                <tr>

                <td width='50%'><p align='center'><b>Cantidad Disponible</b></td>

                <td width='50%'><p align='center'><input type='text' name='cantidad' size='20' value='".$row['Cantidad_Disponible']."' readonly='readonly' ></td>

                </tr>

                <tr>

                <td width='50%'><p align='center'><b>Precio Producto</b></td>

                <td width='50%'><p align='center'><input type='text' name='precio' size='20' value='".$row['Precio_Producto']."' readonly='readonly' ></td>

                </tr>

               

                    

                </tr>

                <input type='hidden' name='idpro' value='$ced'>

                <tr>

 

                    <td width='50%'></td>

                    <td width='50%'>

                    <input type='submit' value='Borrar Producto'/>

                    </td>

                </tr>

            </form>

        </table>

    </div>";

 

 

 

}

 

?>
</body>
</html>