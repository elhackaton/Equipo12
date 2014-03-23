<?php require_once('Connections/conexion.php'); ?>

<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO imagenes (imagen_id, strNombre, strDireccion, strDni, strDescripcion, strCodigo) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['imagen_id'], "int"),
                       GetSQLValueString($_POST['strNombre'], "text"),
                       GetSQLValueString($_POST['strDireccion'], "text"),
                       GetSQLValueString($_POST['strDni'], "text"),
                       GetSQLValueString($_POST['strDescripcion'], "text"),
                       GetSQLValueString($_POST['strCodigo'], "text"));

  mysql_select_db($database_hackaton, $hackaton);
  $Result1 = mysql_query($insertSQL, $hackaton) or die(mysql_error());

  $insertGoTo = "peticion-enviada.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
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
    <style type="text/css">.jumbotron {background:rgba(252,242,190,0.50);}</style>
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

	  <h2 align="center" class="verde">¿Qué mejora le falta a tu ciudad?</h2>      
      <div class="jumbotron">
        <p class="lead"><form name="form1" method="POST" enctype="multipart/form-data" target="_blank"><textarea name="strDescripcion" class="area" placeholder="Me gustaría..."></textarea></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <div class="posi">
           <input type="text" name="strDireccion" class="doble" placeholder="¿DÓNDE OCURRE?">
           <input type="text" name="strCodigo" class="codigo" placeholder="CP">
		   <input type="text" name="strNombre" class="uno" placeholder="NOMBRE"><br>
           <input tabindex="text" name="strDni" class="uno" placeholder="DNI">
           <div class="nota"><p>¡No te preocupes tus datos no serán <br>publicados!</p></div>
           <div class="thumb"></div>
           <div class="camara"><img src="img/camara.png"></div>
            <div class="centra"><input type="file" id="files" name="imagen" id="imagen" /></div>
            <div class="ayuda"><img src="img/help.png"></div>
          
           <div class="boton"><input type="submit" onclick = "this.form.action = 'recibirFoto.php'" value="Subir foto"></div> 
            <div class="boton1"><input type="submit" onclick = "this.form.action = '<?php echo $editFormAction; ?>'" class="btn btn-lg btn-success" role="button" value="Enviar sugerencia"></div>
             <input type="hidden" name="imagen_id" value="" />
  			 <input type="hidden" name="MM_insert" value="form1" />
            </form>
          </div>
        </div>
      </div>

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
<output id="list"></output>
        
        <script>
		  function archivo(evt) {
			var files = evt.target.files; // FileList object
		
			// Obtenemos la imagen del campo "file".
			for (var i = 0, f; f = files[i]; i++) {
			  //Solo admitimos imágenes.
			  if (!f.type.match('image.*')) {
				continue;
			  }
		
			  var reader = new FileReader();
		
			  reader.onload = (function(theFile) {
				return function(e) {
				  // Insertamos la imagen
				 document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
				};
			  })(f);
		
			  reader.readAsDataURL(f);
			}
		  }
		
		  document.getElementById('files').addEventListener('change', archivo, false);
	</script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>