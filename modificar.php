<?php
require("conexion.php");
$conexion = retornarConexion();
$id=$_GET["id"];
$usuarios = "SELECT * FROM usuarios WHERE Id ='$id' ";  
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
                <h1 class="title is-2">Modificar Elemento </h1>
            <!--FOrm-->
              </div>
  
              <!--tabla-->
            </div>
            <br>
            <Form action="datos.php" method="POST">
            <div class="table-container">
              <table class="table is-fullwidth">
               <thead>
                   <tr>
                      <th><abbr title="Position">id</abbr></th>
                      <th>Nombre</th>
                      <th>Usuario</th>
                      <th>Correo</th>
                      <th> </th>
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
                       <input type="text" value="<?php  echo $row["Nombre"]; ?>" name="nombre">
                    </td>
                    <td>
                    <input type="email" value="<?php echo $row["emal"];  ?>" name="email">
                    </td>
                    <td>
                    <input type="text" value="<?php echo $row["user"]; ?>" name="login">
                    </td>
                    <td>
                    <button class="button is-success" id="BotonAgregar" >Guardar</button>
                    </d>
                    </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
  	      </div>
        </Form>
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