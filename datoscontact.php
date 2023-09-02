<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>info</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="cst/css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<?php
$_SERVER["REQUEST_METHOD"] == "POST";
    
    $location = $_POST["location"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];


    // Guardar los datos en el archivo
    $archivo = fopen("clientest.txt", "a"); // "a" abre el archivo para añadir contenido al final
    fwrite($archivo, "Location: " . $location . "\n");
    fwrite($archivo, "Nombre: " . $nombre . "\n");
    fwrite($archivo, "Email: " . $email . "\n");
    fwrite($archivo, "Teléfono: " . $telefono . "\n\n");
    fclose($archivo);
	?>
	
	
	
</head>
<body>

  <div class="container">
    <hr>
    <div class="row">
      <div class="col-xs-6">
<H2 ALIGN="center">INFORMACION DE CONTACTO</H2>
      </div>
      <div class="col-xs-6">
        <P ALIGN="CENTER"><a href="javascript:window.print();">DESCARGAR INFORMACION</a> </P>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-xs-7 col-md-offset-3">
        <div class="media">
          
          <div class="media-body">
            <h2 class="media-heading">INFORMACION</h2>
            <hr><br>
            	CORREO:
				<?PHP
				ECHO "$email";
				?><BR><BR>
            	NOMBRE:<?PHP
				ECHO "$nombre";
				?><BR><BR>
            	ESTADO:<?PHP
				ECHO "$location";
				?><BR><BR>
            	
            	NUMERO DE TELEFONO:<?PHP
				ECHO "$telefono";
				?><BR><BR>
        
 				<form action="index.html"><p align="center">
        <input type="submit" value="Volver a la página principal" class="btn btn-success" role="button"></p>
            
            <!-- END CONTACT FORM --> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Turistaran © .</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="../../../../../../js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../../../../../../js/bootstrap.js"></script>
</body>
</html>

