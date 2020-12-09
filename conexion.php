<?php
function retornarConexion() {
    $con=mysqli_connect("localhost","root","","controlsistema") or die("problemas") ;
    mysqli_set_charset($con,'utf8'); 
 return $con;
    }
?>