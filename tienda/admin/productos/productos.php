<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
    //echo"<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
}

session_start();
if (!isset($_SESSION['logged'])) {
    header('Location: ../login.html');
}

$consulta="select * from producto";
$resultado= mysqli_query($conexion, $consulta);

echo "<table border=1 align='center'>";

 

          echo "<tr>

                    <td> ID PRODUCTO </td>

                    <td>  TIPO DE PRODUCTO </td>

                    <td>  CATEGORIA </td>

                    <td>  NOMBRE DEL PRODUCTO </td>

                    <td>  CANTIDADES DISPONIBLES </td>

                    <td>  PRECIO PRODUCTO </td>

                    <td>  EDITAR </td>

                    <td>  BORRAR </td>

                </tr>";

 

    while($row = mysqli_fetch_array($resultado)){

 

        echo "<tr>

                <td>" .$row['Id_Producto'] ."</td>

                <td>" .$row['Id_TipoProduc'] ."</td>

                <td>" .$row['id_CAT'] ."</td>

                <td>" .$row['Nombre_Producto'] ."</td>
                
                <td>" .$row['Cantidad_Disponible'] ."</td>

                <td>" .$row['Precio_Producto'] ."</td>

                <td>" . '<a href="actualizar2.php?ced='.$row['Id_Producto'] . '"> EDITAR</a>'."</td>

                <td>" . '<a href="borrar2.php?ced='.$row['Id_Producto'] . '"> BORRAR</a>'."</td>

              </tr>";

 

    }

 

    echo "</table>";





?>
</body>
</html>