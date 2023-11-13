

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro Clientes</title>

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


<h2 align ="center">Registro Clientes</h2>

<link rel="stylesheet" href="../../css/style1.css" />


<form method="post" action="">

 

    <table >
    
        <tr>
        <td>

            <input type="text" name="ced" placeholder="Digite número de identificación"/>
</td>
</tr>

<tr>
        <td>

            <input type="text" name="nom" placeholder="Digite nombres"/>

            </td>
</tr>
<tr>
        <td>

            <input type="text" name="apell" placeholder="Digite apellidos"/>

            </td>
</tr>
<tr>
        <td>

            <input type="text" name="cor" placeholder="Digite correo"/>

            </td>
</tr>
<tr>
        <td>


            <input type="text" name="cit" placeholder="Digite Ciudad"/>

            </td>
</tr>
<tr>
        <td>

            <input type="text" name="dir" placeholder="Digite Direccion"/>

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

 

if (isset($_POST["ced"],

          $_POST["nom"],

          $_POST["apell"],

          $_POST["cor"],
          
          $_POST["cit"],
          
          $_POST["dir"])

 

          )

         

       {

 

$ced=$_POST["ced"];

$nom=$_POST["nom"];

$apell=$_POST["apell"];

$cor=$_POST["cor"];

$city=$_POST["cit"];

$dir=$_POST["dir"];

 

 

$consulta= "INSERT INTO clientes (id_cl , nombre_cl, apellido_cl, correo_cl, ciudad_cl, direccion_cl) VALUES ('$ced', '$nom', '$apell', '$cor', '$city', '$dir')";

 

 

if (mysqli_query($conexion, $consulta)) {

 

    echo "<p align ='center'> Registro agregado</p>";

 

}

 

else {

 

    echo "<p align='center'> No se pudo agregar el reistro </p>";

}

 

       }

 

mysqli_close($conexion);

 

 

?>

 

 

 

 

 

 

</body>

</html>