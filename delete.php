<?php
    require("conexion.php");
    $conexion = retornarConexion();

    $respuesta = mysqli_query($conexion, "DELETE * FROM usuarios WHERE codigo='$_GET[id]'");
    #        echo json_encode($respuesta);

    if($respuesta){
        echo "<script>alert('se ha eliminado el usuario con exito');
        window.location='/actividad19/checausr.php'</script>";
    }else{
        echo "<script>alert('No tuvimos exito');
        window.history.go(-1);</script>";
    }

?>