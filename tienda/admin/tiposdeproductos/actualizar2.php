<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tipo de Producto</title>
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
    echo"<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
}

session_start();
if (!isset($_SESSION['logged'])) {
    header('Location: ../login.html');
}

?>

<?php



 

$ced=$_GET["ced"];

 

$consulta="SELECT * FROM tiposdeproductos WHERE Id_tipoProduc ='$ced'";

 

if ($resultado=mysqli_query($conexion, $consulta)){

 

    $row = mysqli_fetch_array($resultado);

 

 

    echo "

 

    <div align='center'>

        <table border='0' width='600' style='font-family: Verdana; font-size: 8pt' id='table1'>

            <tr>

                <td colspan='2'><h3 style=\"color:#000000;text-align:center\">Actualice los datos que considere</h3></td>

            </tr>

            <tr>

                <td colspan='2'>En los campos del formulario puede ver los valores actuales,

                si no se cambian los valores se mantienen iguales.</td>

            </tr>

 

 

            <form method='POST' action='actualizar3.php'>

                

               

               

 

                <tr>

                    <th >Id tipo de Producto</th>

                    <td ><input type='text' name='idtprod' size='20' value='$ced' disabled='disabled'></td>

                </tr>

               

                <tr>

                    <th >Nombre del Tipo de producto</th>

                    <td ><input type='text' name='nomtprod' size='20' value='".$row['tipo_Producto']."' ></td>

                </tr>

                
               

                    

               

                <input type='hidden' name='idtprod' value='$ced'>

                <tr>

 

                    

                    <td colspan='2'>

                    <input type='submit' value='Actualizar Categoria'/>

                    </td>

                </tr>

            </form>

        </table>

    </div>";

 

 

 

}

 

?>
</body>
</html>