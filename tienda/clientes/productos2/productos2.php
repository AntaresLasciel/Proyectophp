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

 

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre );

 

    if(!$conexion)

    {

        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";

    }

    else

    {

       // echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";

    }



    ?>
 

<?php

 


    $consulta="SELECT pro.*,tipo.tipo_Producto,cat.nombre_Cat FROM producto as pro 
    left join tiposdeproductos as tipo on tipo.Id_TipoProduc=pro.Id_TipoProduc
    left join categoria as cat on cat.id_CAT=pro.id_CAT";
    


    $resultado=mysqli_query($conexion, $consulta);

 //Array ( [0] => 200 [Id_Producto] => 200 [1] => 2 [Id_TipoProduc] => 2 [2] => 30 [id_CAT] => 30 [3] => Monopolio [Nombre_Producto] => Monopolio [4] => 5 [Cantidad_Disponible] => 5 [5] => 0 [Foto_Producto] => 0 [6] => 50000 [Precio_Producto] => 50000 ) 

    echo "<table>";
 
    echo "<thead><tr>


    <th>  TIPO DE PRODUCTO </th>

    <th>  CATEGORIA </th>

    <th>  NOMBRE DEL PRODUCTO </th>

    <th>  CANTIDADES DISPONIBLES </th>

    <th>  PRECIO PRODUCTO </th>

    <th>  FOTO </th>

    <th>   </th>

    

</tr></thead><tbody>";

          while($row = mysqli_fetch_array($resultado)){
            
            
            echo "<tr>


            <td>" .$row['tipo_Producto'] ."</td>

            <td>" .$row['nombre_Cat'] ."</td>

            <td>" .$row['Nombre_Producto'] ."</td>
            
            <td>" .$row['Cantidad_Disponible'] ."</td>

            <td>" .$row['Precio_Producto'] ."</td>

            <td><img src=\"".$row['Foto_Producto']."\"/> </td>

            <td>" . '<a href="ver.php?ced='.$row['Id_Producto'] . '"> Ver </a>'."</td>

            

          </tr>";

            

   

        }

        

        echo "</tbody></table>";

 

        
        mysqli_close($conexion);

 

 

 

 



 

?>

 

 

</body>

</html>