<?php 
include ('../Modelo/conex.php');


if(isset($_POST['ModifiUsua'])){
$usuario = $_POST['idusuario']; 
$TipoDoc = $_POST['TipoDoc'];
$Tipousua = $_POST['TipoUsua'];
$Nombre = $_POST['NombUsua'];
$Apellidos = $_POST['ApellUsua'];
$clave = $_POST['PassUsua'];
$Cel = $_POST['CeluUsua'];
$Correo = $_POST['CorreoUsua'];



$eje = $conexion -> query("UPDATE usuario SET idUsuario ='$usuario', IdTipoDoc ='$TipoDoc', idTipoUsuario ='$Tipousua', NombreUsuario ='$Nombre', ApellidoUsuario = '$Apellidos', ClaveUsua ='$clave', CelUsua = '$Cel', CorreoUsua ='$Correo' WHERE idUsuario = '$usuario'");



if ($eje) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admin/index.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admin/index.php';
	</script>";
}

}
 ?>