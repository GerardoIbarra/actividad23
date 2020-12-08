# Actividad18
# php
# header('Content-Type: application/json');

# require("conexion.php");

# $conexion = retornarConexion();

# switch ($_GET['accion']) {
  #  case 'listar':
   #     $datos = mysqli_query($conexion, "select Id,Nombre,emal,login from usuarios"));
   #    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
#    echo json_encode($resultado);
   #   break;

#    case 'agregar':
#        $respuesta = mysqli_query($conexion, "insert into usuarios(Nombre,emal,login) values ('$_POST[nombre]','$_POST[email]','$_POST[Login]')");
#        echo json_encode($respuesta);
#        break;

#    case 'borrar':
#        $respuesta = mysqli_query($conexion, "delete from usuarios where codigo=$_GET[codigo]");
#        echo json_encode($respuesta);
#        break;

 #   case 'consultar':
 #       $datos = mysqli_query($conexion, "select Id,Nombre,emal,login from usuarios where codigo=$_GET[Id]");
 #       $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
 #       echo json_encode($resultado);
 #       break;

 #   case 'modificar':
 #       $respuesta = mysqli_query($conexion, "update usuarios set
  #                                                nombre='$_POST[Nombre]',
  #                                                emal=$_POST[emal],
  #                                                login=$_POST[user]
  #                                             where Id=$_GET[Id]");
  #      echo json_encode($respuesta);
  #      break;
# }
#