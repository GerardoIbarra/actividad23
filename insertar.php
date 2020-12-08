<?php
    require("conexion.php");
    $conexion = retornarConexion();
    $sql = "INSERT INTO usuarios(Nombre,emal,user) values ('$_POST[nombre]','$_POST[email]','$_POST[Login]')";
    $inser=mysqli_query($conexion, $sql);
    if($inser){
        echo "<script>alert('se ha registrado el usuario con exito');
        window.location='/actividad19'</script>";
    }else{
        echo "<script>alert('No tuvimos exito');
        window.history.go(-1);</script>";
    }
?>