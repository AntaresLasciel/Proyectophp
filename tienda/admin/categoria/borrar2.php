<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Categoria</title>
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
    header('Location: ../index.html');
}
?>

<?php

 

echo $_GET["ced"];

 

$ced=$_GET["ced"];

 

$consulta="SELECT * FROM categoria WHERE id_Cat ='$ced'";

 

if ($resultado=mysqli_query($conexion, $consulta)){

 

    $row = mysqli_fetch_array($resultado);

 

 

    echo "

 

    <div align='center'>

        <table border='0' width='600' style='font-family: Verdana; font-size: 8pt' id='table1'>

            <tr>

                <td colspan='2'><h3 align='center'>Está seguro que desea borrar esta Categoria?</h3></td>

            </tr>

            <tr>

                <td colspan='2'></td>

            </tr>


            <form method='POST' action='borrar3.php'>

                <tr>

                
                </tr>
 

                <tr>

                    <td width='50%'><p align='center'><b>Id Categoria</b></td>

                    <td width='50%'><p align='center'><input type='text' name='idcat' size='20' value='$ced' disabled='disabled'></td>

                </tr>

               

                <tr>

                    <td width='50%'><p align='center'><b>Nombre de la categoria</b></td>

                    <td width='50%'><p align='center'><input type='text' name='nomcat' size='20' value='".$row['nombre_Cat']."' disabled='disabled' ></td>

                </tr>

                

                </tr>

                <input type='hidden' name='idcat' value='$ced'>

                <tr>

 

                    <td width='50%'></td>

                    <td width='50%'>

                    <input type='submit' value='Borrar Categoria'/>

                    </td>

                </tr>

            </form>

        </table>

    </div>";

 

 

 

}

 

?>
</body>
</html>