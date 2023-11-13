<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Cliente</title>
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

 

$consulta="SELECT * FROM clientes WHERE id_cl ='$ced'";

 

if ($resultado=mysqli_query($conexion, $consulta)){

 

    $row = mysqli_fetch_array($resultado);

 

 

    echo "

 

    <div align='center'>

        <table border='0' width='600' style='font-family: Verdana; font-size: 8pt' id='table1'>

            <tr>

                <td colspan='2'><h3 align='center'>Está seguro que desea borrar este cliente?</h3></td>

            </tr>

            <tr>

                <td colspan='2'></td>

            </tr>

 

 

            <form method='POST' action='borrar3.php'>

                <tr>


                </tr>
 

                <tr>

                    <td width='50%'><p align='center'><b>Cédula</b></td>

                    <td width='50%'><p align='center'><input type='text' name='cedu' size='20' value='$ced' disabled='disabled'></td>

                </tr>

               

                <tr>

                    <td width='50%'><p align='center'><b>Nombres</b></td>

                    <td width='50%'><p align='center'><input type='text' name='nom' size='20' value='".$row['nombre_cl']."' disabled='disabled' ></td>

                </tr>

                <tr>

                    <td width='50%'><p align='center'><b>Apellidos</b></td>

                    <td width='50%'><p align='center'><input type='text' name='apel' size='20' value='".$row['apellido_cl']."' disabled='disabled' ></td>

                </tr>

                <tr>

                <td width='50%'><p align='center'><b>Correo</b></td>

                <td width='50%'><p align='center'><input type='text' name='cor' size='20' value='".$row['correo_cl']."' disabled='disabled' ></td>

                </tr>

                <tr>

                <td width='50%'><p align='center'><b>Ciudad</b></td>

                <td width='50%'><p align='center'><input type='text' name='ciud' size='20' value='".$row['ciudad_cl']."' disabled='disabled' ></td>

                </tr>

                <tr>

                <td width='50%'><p align='center'><b>Direccion</b></td>

                <td width='50%'><p align='center'><input type='text' name='dir' size='20' value='".$row['direccion_cl']."' disabled='disabled' ></td>

                </tr>

               

                </tr>

                <input type='hidden' name='cedu' value='$ced'>

                <tr>

 

                    <td width='50%'></td>

                    <td width='50%'>

                    <input type='submit' value='Borrar cliente'/>

                    </td>

                </tr>

            </form>

        </table>

    </div>";

 

 

 

}

 

?>
</body>
</html>