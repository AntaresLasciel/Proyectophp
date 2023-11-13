<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Consultar Producto</title>
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
    session_start();
    if (!isset($_SESSION['logged'])) {
        header('Location: ../login.html');
    }
 

    ?>
 

<form method = "POST" action = "">

    <fieldset align ="center">

            <legend><strong> Consultar Producto</strong></legend>

                <legend><strong>Digite el producto a consultar:</strong></legend>

               

                <input type="text" name="idproduc" size="20"><br><br>

 

                <input type="submit" value="Buscar Producto">

    </fieldset>

</form>

 

<?php

 

if(isset($_POST["idproduc"])){

 

    $busc=$_POST["idproduc"];

 

    $consulta="SELECT * FROM producto WHERE Id_Producto  ='$busc'";

 

    echo "<p align='center'> Resultado de la consulta</p>";

 

    $resultado=mysqli_query($conexion, $consulta);

 

    echo "<table border=1 align='center' >";

 

    echo "<tr>

            <td> ID DEL PRODUCTO </td>

            <td> ID TIPO DE PRODUCTO </td>

            <td> ID DE LA CATEGORIA </td>

            <td> NOMBRE DEL PRODUCTO </td>

            <td> CANTIDADES DISPONIBLES </td>

            <td> FOTO PRODUCTO </td>

            <td> PRECIO </td>



            
          </tr>";

 

          while($row = mysqli_fetch_array($resultado)){

 

            echo "<tr>

                    <td>" .$row['Id_Producto'] ."</td>

                    <td>" .$row['Id_TipoProduc'] ."</td>

                    <td>" .$row['id_CAT'] ."</td>

                    <td>" .$row['Cantidad_Disponible'] ."</td>

                    <td><img src=\"".$row['Foto_Producto']."\"/> </td>

                    <td>" .$row['Precio_Producto'] ."</td>


                  </tr>";

   

        }

 

        echo "</table>";

 

        $numero = mysqli_num_rows($resultado);

        echo "<p align='center'><strong>Producto:  $numero </strong>";

   

        mysqli_close($conexion);

 

 

 

 

}

 

?>

 

 

</body>

</html>