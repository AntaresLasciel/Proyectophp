<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
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

$consulta="select * from pedido";
$consulta="SELECT pro.*,tipo.nombre_cl,tipo.apellido_cl,cat.Nombre_Producto FROM pedido as pro 
    left join clientes as tipo on tipo.id_cl=pro.id_cl
    left join producto as cat on cat.Id_producto=pro.Id_producto";

$resultado= mysqli_query($conexion, $consulta);

echo "<table border=1 align='center'>";

 

          echo "<tr>

                    <td> NUMERO DE PEDIDO </td>

                    <td>  CEDULA </td>

                    <td>  NOMBRE </td>

                    <td>  APELLIDO </td>

                    <td>  PRODUCTO </td>

                    <td>  IDENTIFICACION DEL PRODUCTO </td>

                    <td>  CANTIDAD DEL PRODUCTO </td>

                    <td>  FECHA DEL PEDIDO </td>

                    <td>  EDITAR </td>

                    <td>  BORRAR </td>

                </tr>";

 

    while($row = mysqli_fetch_array($resultado)){

 

        echo "<tr>

                <td>" .$row['Num_Pedido'] ."</td>

                <td>" .$row['id_cl'] ."</td>

                <td>" .$row['nombre_cl'] ."</td>

                <td>" .$row['apellido_cl'] ."</td>

                <td>" .$row['Nombre_Producto'] ."</td>

                <td>" .$row['Id_Producto'] ."</td>
                
                <td>" .$row['Cantidad_del_Producto'] ."</td>

                <td>" .$row['Fecha_Ped'] ."</td>

                <td>" . '<a href="actualizar2.php?ced='.$row['Num_Pedido'] . '"> EDITAR</a>'."</td>

                <td>" . '<a href="borrar2.php?ced='.$row['Num_Pedido'] . '"> BORRAR</a>'."</td>

              </tr>";

 

    }

 

    echo "</table>";

    





?>
</body>
</html>