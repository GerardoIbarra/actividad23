<?php
 require("./controllers/conexion.php");
    $conexion = retornarConexion();
    
    $respuesta = mysqli_query($conexion, "UPDATE usuarios SET Nombre='$_POST[nombre]', emal='$_POST[email]', user='$_POST[login]' WHERE Id='$_POST[id]'");

    if($respuesta){
        echo "<script>alert('se ha editado el usuario con exito');
        window.location='./checausr.php'</script>";
    }else{
        echo "<script>alert('No tuvimos exito');
        window.history.go(-1);</script>";
    }

?>