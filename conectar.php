<?php
$conex = mysqli_connect("localhost","root","","usuarios");
if(!$conex){
    echo "Error de conexion";
}
else{
    $Nombre=$_POST['Nombre'];
    $Apellido=$_POST['Apellido'];
    $Edad=$_POST['Edad'];
    $Email=$_POST['Email'];
    $consultas="INSERT INTO user(Nombre,Apellido,Edad,Email) values ('$Nombre','$Apellido','$Edad','$Email')";
    $consultas2="SELECT *FROM user where Nombre='$Nombre'";
    $verificar=mysqli_query($conex,$consultas2);
    if(mysqli_num_rows($verificar)>0){
        echo "El usuario ya esta registrado";
    }
    else{
        $ejecutar=mysqli_query($conex,$consultas);
        if(!$ejecutar){
            echo "No se guardaron los datos";
        }
        else{
            echo "Se guardaron correctamente";
        }
    }
}
?>