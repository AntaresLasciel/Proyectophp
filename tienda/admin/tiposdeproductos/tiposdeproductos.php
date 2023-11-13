<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Productos</title>
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
   // echo"<h3>No se ha podido conectar PHP - Mysqol, verifique sus datos.</h3><hr><br>";
}

{
    //echo"<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
}

session_start();
if (!isset($_SESSION['logged'])) {
    header('Location: ../login.html');
}


$consulta="select * from tiposdeproductos";
$resultado= mysqli_query($conexion, $consulta);

echo "<table border=1 align='center'>";

 

          echo "<tr>

                    <td> ID PRODUCTO </td>

                    <td>  TIPO DE PRODUCTO </td>

                    <td>  EDITAR </td>

                    <td>  BORRAR </td>

                </tr>";

 

    while($row = mysqli_fetch_array($resultado)){

 

        echo "<tr>

                <td>" .$row['Id_tipoProduc'] ."</td>

                <td>" .$row['tipo_Producto'] ."</td>


                <td>" . '<a href="actualizar2.php?ced='.$row['Id_tipoProduc'] . '"> EDITAR</a>'."</td>

                <td>" . '<a href="borrar2.php?ced='.$row['Id_tipoProduc'] . '"> BORRAR</a>'."</td>

              </tr>";

 

    }

 

    echo "</table>";





?>
</body>
</html>