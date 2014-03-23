<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hackaton - Almería">
    <meta name="author" content="Grupo 12">
    <link rel="shortcut icon" href="files/mini-logo.png">

    <title>Inicio</title>

    <!--empieza bootstrap-->
    <link href="bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/jumbotron-narrow.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/estilo.css" rel="stylesheet" type="text/css">
    <!--termina bootstrap-->
    <!--empieza effecthover-->
    <link href="bootstrap/component.css" rel="stylesheet" type="text/css">
    <script src="bootstrap/js/modernizr.custom.js"></script>
    <!--termina effecthover-->
  </head>

  <body>
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <section class="color-10">
				<nav class="cl-effect-10">
					<a href="index.php" data-hover="Inicio"><span>Inicio</span></a>
					<a href="sugerencias.php" data-hover="Sugerencias"><span>Sugerencias</span></a>
					
				</nav>
			</section>
          </ul>
        <h3 class="text-muted"><img src="img/logociudad3.gif" width="90" height="60"></h3>
      </div>

	  <h2 align="center">Tu sugerencia ha sido registrada</h2>      
     <div class="cuadro"><h4><br>Dejanos tu correo electrónico si quieres realizar un seguimiento de tu sugerencia:</h4>
     <div align="center" class="luga">
     <form method="post" name="strEmail" name="form2">
     <input type="email" placeholder="Correo electrónico" class="lugar">
     <input type="submit" value="Enviar"  class="btn btn-lg btn-success" role="button">
     </form>
     </div>
     <div class="cancelar"><a href="index.php">Cancelar</a></div>
     </div><br><br><br>

      <div class="footer">
        <p>&copy; MejoraTuCiudad 2014</p>
      </div>
    </div> <!-- /container -->

    <!--Start of Zopim Live Chat Script-->
    <div class="zopim">
	<script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
    $.src='//v2.zopim.com/?1VpTg1WyE5n2bDECgP9AJ8BakWgf8iKf';z.t=+new Date;$.
    type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
    </script>
    </div>
	<!--End of Zopim Live Chat Script-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>