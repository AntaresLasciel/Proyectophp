<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Consulta Categoria</title>
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
        header('Location: ../index.html');
    }
 

    ?>

 

 

<form method = "POST" action = "">

    <fieldset align ="center">

            <legend><strong> Consultar Datos</strong></legend>

                <legend><strong>Digite la categoria a consultar:</strong></legend>

               

                <input type="text" name="idcat" size="20"><br><br>

 

                <input type="submit" value="Buscar Cliente">

    </fieldset>

</form>

 

<?php

 

if(isset($_POST["idcat"])){

 

    $busc=$_POST["idcat"];

 

    $consulta="SELECT * FROM categoria WHERE id_Cat  ='$busc'";

 

    echo "<p align='center'> Resultado de la consulta</p>";

 

    $resultado=mysqli_query($conexion, $consulta);

 

    echo "<table border=1 align='center' >";

 

    echo "<tr>

            <td> ID CATEGORIA</td>

            <td> NOMBRE CATEGORIA</td>

            
          </tr>";

 

          while($row = mysqli_fetch_array($resultado)){

 

            echo "<tr>

                    <td>" .$row['id_Cat'] ."</td>

                    <td>" .$row['nombre_Cat'] ."</td>


                  </tr>";

   

        }

 

        echo "</table>";

 

        $numero = mysqli_num_rows($resultado);

        echo "<p align='center'><strong>Número de Categoria:  $numero </strong>";

   

        mysqli_close($conexion);

 

 

 

 

}

 

?>

 

 

</body>

</html>