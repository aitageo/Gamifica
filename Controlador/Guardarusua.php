<?php 
include ('../Modelo/conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BtnGuardar'])) {
	echo "hola";

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	//$usuario = 5;
	$IdentificaUsua= intval($_POST['IdentificaUsua']);
	$TipoDoc = $_POST['TipoDoc'];
	$Tipousua = 1;
	$Nombre = $_POST['NombUsua'];
	$Apellidos = $_POST['ApellUsua'];
	$Cel = $_POST['CeluUsua'];
	$correo = $_POST['CorreoUsua'];
	$clave = password_hash($_POST['PassUsua'],PASSWORD_DEFAULT);

	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */

	$query= "INSERT INTO usuarios(IdentificaUsua,IdTipoDoc, idTipoUsua, NombreUsua, ApellidoUsua, CelUsua, CorreoUsua,ClaveUsua) VALUES ($IdentificaUsua,$TipoDoc,$Tipousua,'$Nombre', '$Apellidos','$Cel', '$correo','$clave')";
	
	if(mysqli_query($conexion,$query)==TRUE) {
		echo  "<script>Guardado Exitosamente</script>";
		echo "<script>
				location.href='../Vista/App/Admin/index.php';
					</script>";
			}else{
				echo "No se pudo guardar Error: " .$query . "<br>" .mysqli_error($conexion);
				"<script>
				alert('El registro no pudo ser guardado');
				location.href='../Vista/App/Admin/index.php';
					</script>";
			}
  }

  mysqli_close($conexion);
  //por aitageo
 ?>
 