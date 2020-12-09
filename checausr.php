<?php
require("conexion.php");
$conexion = retornarConexion();
$usuarios = "SELECT * FROM usuarios";
?>

<html>
<body>
<head>
  <title>Envio de informaci&oacute;n</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
</head>
<body>
	<section class="hero is-primary">
	    <div class="hero-body">
	        <div class="container">
	          <h1 class="title">Universidad de Colima</h1>
	          <h2 class="subtitle">Facultad de Telemática</h2>
        	</div>
      	</div>
    </section>
  
    <!-- Cuerpo del documento -->
    <div class="container">    
        <div class="columns is-centered">
            <div class="column is-three-fifths is-offset-one-fifth">      
                <h1 class="title is-2">Control de sistema </h1>
            <!--FOrm-->
            <div class="container--add" id="div1" style="display:none" >
            <form method = "post" action="insertar.php" >
              <h2 class="container__title"><strong>Registrar un nuevo usuario</strong></h2>
              <div class="conteiner__form">
              <div class="field">
                    <label class="label">Nombre</label>
                    <div class="control">
                      <div class="columns">
                          <div class="column is-three-fifths"><input class="input is-primary" type="text" id="nombre" name="nombre" placeholder="e.g Alexeandro Smith"></div>
                      </div>
                    </div>
                  </div>
                  <div class="field">
                    <label class="label">Login</label>
                    <div class="control">
                      <div class="columns">
                          <div class="column is-three-fifths"><input class="input is-primary" type="text" id="Login" name="Login" placeholder="e.g Alex"></div>
                          </div>
                    </div>
                        <div id="mensaje" style="display: none">El correo fue guardado Correctamente</div>
                        <div id="error" style="display: none">Hubo un problema, intente más tarde</div>
                  </div>

                  <div class="field">
                    <label class="label">Email</label>
                      <div class="control"><div class="columns">
                        <div class="column is-two-fifths">
                      <input class="input is-primary" type="email" id="email" name="email" placeholder="e.g. alexsmith@gmail.com"></div>
                        </div>
                        <button id="botonregistro" class="button is-info" >Registrar
                        <?php
                           
                       ?>
                        </button>
                      </div>
                      </div>
              </div>
                  </form>
              <!--tabla-->
            </div>
            <br>
            <div class="table-container">
            <button class="button is-success" id="BotonAgregar" onclick="showHide()" >Agregar usuario</button>
              <table class="table is-fullwidth">
               <thead>
                   <tr>
                      <th><abbr title="Position">id</abbr></th>
                      <th>Nombre</th>
                      <th>Correo</th>
                      <th>Login</th>
                      <th>Acciones</th>
                    <tr>
                </thead>
                <tbody>
                  <?php
                    $datos = mysqli_query($conexion, $usuarios);
                    while($row = mysqli_fetch_array($datos) ){
                  ?>
                  <tr>
                      <th>
                        <?php
                            echo $row["Id"];                    
                        ?>
                     </th>
                     <td>
                     <?php
                            echo $row["Nombre"];                    
                      ?>
                    </td>
                    <td>
                     <?php
                            echo $row["emal"];                    
                      ?>
                    </td>
                    <td>
                     <?php
                            echo $row["user"];                    
                      ?>
                    </td>
                    <td>
                    <div class="modal-footer">
                      <button id="ConfirmarModificar" class="button is-warning">
                      <a href="modificar.php?id=<?php echo $row['Id'];?>">  
                      Modificar
                    </a>
                      </button>
                      <button class="button is-danger" onclick="confirmacion()">
                      <a href="delete.php?id=<?php echo$row['Id'];?>">Borrar</a>
                      </button>
                    </div>
                    </td>
                    </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
              <?php
           // }else{
              ?>
              <!--<article class="message is-danger">
                <div class="message-header">
                <p><?php echo "Error al envio";  ?></p><br>
                </div>
            </article>-->
            <?php
           // }
        ?>
  	</div>
         </div>
      </div>
    </div>
    <script  src="index.js"></script>
   <!-- pié de página -->
      <center>
      <footer class="footer">
          <div class="content has-text-centered">
            <p>
              <strong>&copy;Desarrollado</strong> por <a href="#">Luis Ibarra</a>. 
            </p>
          </div>
        </footer>
    </center>
  </body>
</html>