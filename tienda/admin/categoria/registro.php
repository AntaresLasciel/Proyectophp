

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro de Categorias</title>

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
        header('Location: ../index.html');
    }

 

?>


<h2 align ="center">Registro Categorias</h2>

<link rel="stylesheet" href="../../css/style1.css" />


<form method="post" action="">

 

    <table >
    
        <tr>
        <td>

            <input type="text" name="idcat" placeholder="Digite número de Categoria"/>
</td>
</tr>

<tr>
        <td>

            <input type="text" name="nomcat" placeholder="Digite nombre de la Categoria"/>

            </td>
</tr>
 
<tr>
        <td>

            <input type="submit" value="Enviar datos"/>

            </td>
</tr>

 

</table>

</form>

 

<?php

 

if (isset($_POST["idcat"],

          $_POST["nomcat"])

 

          )

         

       {

 

$idcat=$_POST["idcat"];

$nomcat=$_POST["nomcat"];



 

 

$consulta= "INSERT INTO categoria (id_Cat , nombre_Cat) VALUES ('$idcat', '$nomcat')";

 

 

if (mysqli_query($conexion, $consulta)) {

 

    echo "<p align ='center'> Categoria agregada</p>";

 

}

 

else {

 

    echo "<p align='center'> No se pudo agregar la Categoria </p>";

}

 

       }

 

mysqli_close($conexion);

 

 

?>

 

 

 

 

 

 

</body>

</html>