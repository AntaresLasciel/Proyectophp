<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Consulta Clientes</title>
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

            <legend><strong> Consultar Datos</strong></legend>

                <legend ><strong>Digite la cedula a consultar:</strong></legend>

               

                <input type="text" name="ced" size="20"><br><br>

 

                <input type="submit" value="Buscar Cliente">

    </fieldset>

</form>

 

<?php

 

if(isset($_POST["ced"])){

 

    $busc=$_POST["ced"];

 

    $consulta="SELECT * FROM clientes WHERE id_cl ='$busc'";

 

    echo "<p align='center'> Resultado de la consulta</p>";

 

    $resultado=mysqli_query($conexion, $consulta);

 

    echo "<table border=1 align='center' >";

 

    echo "<tr>

            <td> CEDULA</td>

            <td> NOMBRE</td>

            <td> APELLIDO</td>

            <td> CORREO</td>

            <td> CIUDAD</td>

            <td> DIRECCION</td>

          </tr>";

 

          while($row = mysqli_fetch_array($resultado)){

 

            echo "<tr>

                    <td>" .$row['id_cl'] ."</td>

                    <td>" .$row['nombre_cl'] ."</td>

                    <td>" .$row['apellido_cl'] ."</td>

                    <td>" .$row['correo_cl'] ."</td>
                    
                    <td>" .$row['ciudad_cl'] ."</td>

                    <td>" .$row['direccion_cl'] ."</td>

                  </tr>";

   

        }

 

        echo "</table>";

 

        $numero = mysqli_num_rows($resultado);

        echo "<p align='center'><strong>Número de Registros:  $numero </strong>";

   

        mysqli_close($conexion);

 

 

 

 

}

 

?>

 

 

</body>

</html>