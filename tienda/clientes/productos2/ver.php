<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ver</title>
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
    //echo"<h3>No se ha podido conectar PHP - Mysqol, verifique sus datos.</h3><hr><br>";
}

{
    //echo"<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
}


?>

<?php

 



 

$ced=$_GET["ced"];

 

$consulta="SELECT * FROM producto WHERE Id_Producto ='$ced'";

//20029/10/2023 09:57:33

if ($resultado=mysqli_query($conexion, $consulta)){

 

    $row = mysqli_fetch_array($resultado);

 

 

    echo "

 

    <div align='center'>

        <table border='0' width='600' style='font-family: Verdana; font-size: 8pt' id='table1'>

            

 

                <tr>

                    <th >Id Producto</th>

                    <td >$ced</td>

                </tr>

               

                <tr>

                    <th >Tipo Producto</th>

                    <td >".$row['Id_TipoProduc']."</td>

                </tr>

                <tr>

                    <th >Categoria</th>

                    <td >".$row['id_CAT']."</td>

                </tr>

                <tr>

                <th >Nombre Producto</th>

                <td >".$row['Nombre_Producto']."</td>

                </tr>

                <tr>

                <th >Cantidad Disponible</th>

                <td >".$row['Cantidad_Disponible']."</td>

                </tr>


                <tr>

                <th >Precio Producto</th>

                <td >".$row['Precio_Producto']."</td>

                </tr>
                <tr>

                
               

                    <td colspan=2><img src=\"".$row['Foto_Producto']."\"/></td>


                </tr>

                <tr>
                <td colspan= \"2\">
               <form method=\"post\" action=\"\"> 
               <input name= \"idpro\" type=\"hidden\" value=\"$ced\"/>
               <input name= \"ced\" type=\"texto\" placeholder=\"Cedula\"/>
               <br>
               <input name= \"cantpro\" type=\"number\" placeholder=\"Cantidad\"/>
               <br>
               <input type=\"submit\" value=\"enviar pedido\"/>
               </form>
                

                </td>

 

                    

                </tr>

            </form>

        </table>

    </div>";

 

 

 

}

if (isset($_POST["ced"],

$_POST["idpro"],

$_POST["cantpro"])



)



{





$ced=$_POST["ced"];

$idpro=$_POST["idpro"];

$cantpro=$_POST["cantpro"];

$fecha=date('Y/m/d');









$consulta= "INSERT INTO pedido (Id_cl , Id_Producto , Cantidad_del_Producto , Fecha_Ped) VALUES ('$ced', '$idpro', '$cantpro', '$fecha')";





if (mysqli_query($conexion, $consulta)) {



echo "<p style='text-align:center;'> Pedido Realizado</p>";



}



else {



echo "<p style='text-align:center;'> No se pudo agregar el Pedido </p>";

}



}

?>
</body>

</html>