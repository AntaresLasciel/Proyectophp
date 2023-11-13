<?php

 

$db_host="localhost";
$db_nombre="tienda";
$db_usuario="root";
$db_contra="antares13659";

 

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre );

 

    if(!$conexion)

    {

        //echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";

    }

    else

    {

       // echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";

    }

 

 
$cedula=$_POST["Cedula"];
$password=$_POST["Contrasena"];
    

 



 

    $consulta="SELECT * FROM clientes WHERE id_cl ='$cedula' and password='$password' and admin=1";

 

    

 

    $resultado=mysqli_query($conexion, $consulta);

 
if(mysqli_num_rows($resultado)>0){

    session_start();
    $_SESSION['logged']=true;
    $_SESSION['nombre']=$consulta[0]->nombre_cl;
    $_SESSION['cedula']=$consulta[0]->id_cl;

    header('Location: ../index.html');
    
    
}


else{

    echo "credenciales incorrectas";
    header('Location: ../login.html');
}
    

        mysqli_close($conexion);

 

 

 

 



 

?>