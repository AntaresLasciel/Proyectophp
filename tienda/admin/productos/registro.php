

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agregar Producto</title>

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

        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";

    }

    else

    {

       /* echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";*/

    }

    session_start();
    if (!isset($_SESSION['logged'])) {
        header('Location: ../login.html');
    }

 

?>


<h2 align ="center">Registro de Producto</h2>

<link rel="stylesheet" href="../../css/style1.css" />


<form method="post" action="">

 

    <table >
    
        <tr>
        <td>

            <input type="text" name="numped" placeholder="Numero de Pedido"/>
</td>
</tr>

<tr>
        <td>

            <input type="text" name="ced" placeholder="Digite cedula del cliente"/>

            </td>
</tr>

<tr>
        <td>

            <input type="text" name="idpro" placeholder="codigo del producto"/>

            </td>
</tr>

<tr>
        <td>

            <input type="text" name="cantpro" placeholder="Cantidad del producto"/>

            </td>
</tr>

<tr>
        <td>

            <input type="text" name="dataped" placeholder="Fecha del Pedido"/>

            </td>
</tr>

<tr>
        <td>

            <input type="submit" value="Enviar Pedido"/>

            </td>
</tr>

 

</table>

</form>

 

<?php

 

if (isset($_POST["numped"],

          $_POST["ced"],

          $_POST["idpro"],

          $_POST["cantpro"],

          $_POST["dataped"])

 

          )

         

       {

 

$nped=$_POST["numped"];

$ced=$_POST["ced"];

$idpro=$_POST["idpro"];

$cantpro=$_POST["cantpro"];

$dataped=$_POST["dataped"];



 

 

$consulta= "INSERT INTO pedido (Num_Pedido , Id_cl , Id_Producto , Cantidad_del_Producto , Fecha_Ped) VALUES ('$nped', '$ced', '$idpro', '$cantpro', '$dataped')";

 

 

if (mysqli_query($conexion, $consulta)) {

 

    echo "<p align ='center'> Pedido Realizado</p>";

 

}

 

else {

 

    echo "<p align='center'> No se pudo agregar la Categoria </p>";

}

 

       }

 

mysqli_close($conexion);

 

 

?>

 

 

 

 

 

 

</body>

</html>