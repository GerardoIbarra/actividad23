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
                <h1 class="title is-2">Ingresar al sistema</h1>

        <?php
        $name = $_POST['nombre'];
        $email = $_POST['email'];
            if((strlen($name)==0)||(strlen($email) == 0)){
            ?>
            <article class="message is-danger">
                <div class="message-header">
                <p "><?php echo "Error al envio";  ?></p><br>
                </div>
            </article>
            <?php       
            }else{
            ?>
            
                <p class=".container">Nombre</p> <?php echo $_POST['nombre'];  ?><br>
                <p class=".container">Correo</p> <?php echo $_POST['email']; ?>

            <?php
        }
        ?>
	</div>
  </div>
</div>

   <!-- pié de página -->
   <center>
   <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>&copy;Desarrollado</strong> por <a href="#">José Nabor</a>. 
        </p>
      </div>
    </footer>
</center>
</body>
</html>