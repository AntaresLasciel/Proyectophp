

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro de tipo de producto</title>

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


<h2 align ="center">Registro de Tipo de producto</h2>

<link rel="stylesheet" href="../../css/style1.css" />


<form method="post" action="">

 

    <table >
    
        <tr>
        <td>

            <input type="text" name="idtipoprod" placeholder="Tipo de Pedido"/>
</td>
</tr>

<tr>
        <td>

            <input type="text" name="tipoprod" placeholder="Nombre del Tipo de Producto"/>

            </td>
</tr>

<tr>
        <td>

            <input type="submit" value="Registrar tipo de Producto"/>

            </td>
</tr>

 

</table>

</form>

 

<?php

 

if (isset($_POST["idtipoprod"],

          $_POST["tipoprod"])

 

          )

         

       {

 

$idtipodeproducto=$_POST["idtipoprod"];

$tipodeproducto=$_POST["tipoprod"];





 

 

$consulta= "INSERT INTO tiposdeproductos (Id_tipoProduc , tipo_Producto) VALUES ('$idtipodeproducto', '$tipodeproducto')";

 

 

if (mysqli_query($conexion, $consulta)) {

 

    echo "<p align ='center'>Tipo de Producto Registrado</p>";

 

}

 

else {

 

    echo "<p align='center'> No se pudo agregar el Tipo de Producto </p>";

}

 

       }

 

mysqli_close($conexion);

 

 

?>

 

 

 

 

 

 

</body>

</html>