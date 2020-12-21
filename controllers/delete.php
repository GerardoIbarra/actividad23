<?php
 require("./controllers/conexion.php");
    $conexion = retornarConexion();
    $id = $_GET['id'];

    $respuesta = mysqli_query($conexion, "DELETE FROM usuarios WHERE Id='$_GET[id]';");

    if($respuesta){
        echo "<script>alert('se ha eliminado el usuario con exito');
        window.location='./views/checausr.php'</script>";
    }else{
        echo "<script>alert('No tuvimos exito');
        window.history.go(-1);</script>";
    }

?>