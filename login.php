<?php
    $nombre = $_POST['nombre'];
    $login = $_POST['email'];

    require("conexion.php");
    $conexion = retornarConexion();

    $consulta = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE Nombre = '$nombre' AND emal = '$login'");  
    var_dump($consulta);
    $count = mysqli_num_rows($consulta);
    if($count==0){
        echo "<script>alert('No tuvimos exito');
        window.history.go(-1);</script>";

    }else{
        header("location:checausr.php");
    }
   
?>