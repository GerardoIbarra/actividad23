<?php
    require("conexion.php");
    $conexion = retornarConexion();

    $respuesta = mysqli_query($conexion, "UPDATE usuarios SET Nombre='$_POST[nombre]',
    emal='$_POST[email]',user='$_POST[login]' where Id='$_GET[id]'");

    if($respuesta){
        echo "<script>alert('se ha Actualizado el usuario con exito');
        window.location='/actividad19/checausr.php'</script>";
    }else{
        echo "<script>alert('No tuvimos exito');
        window.history.go(-1);</script>";
    }

?>