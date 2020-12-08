<?php
function retornarConexion() {
    $con=mysqli_connect("localhost","root","","controlSistema") or die("problemas") ;
    mysqli_set_charset($con,'utf8'); 
 return $con;
    }
?>