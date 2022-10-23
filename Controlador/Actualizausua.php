<?php 
include ('../Modelo/conex.php');


if(isset($_POST['BtnModifica'])){
//$id = $_REQUEST['id'];	
 $usuario = $_POST['idUsuario']; 
 echo $usuario;
$identificaUsua = intval($_POST['IdentificaUsua']);
$TipoDoc = intval($_POST['TipoDoc']);
$Tipousua = intval($_POST['TipoUsua']);
$Nombre = $_POST['NombUsua'];
$Apellidos = $_POST['ApellUsua'];
$clave = $_POST['PassUsua'];
$Cel = $_POST['CeluUsua'];
$Correo = $_POST['CorreoUsua'];



$eje = $conexion->query("UPDATE usuarios SET IdentificaUsua ='$identificaUsua',IdTipoDoc ='$TipoDoc', idTipoUsua ='$Tipousua', NombreUsua ='$Nombre', ApellidoUsua = '$Apellidos', ClaveUsua ='$clave', CelUsua = '$Cel', CorreoUsua ='$Correo' WHERE idUsuario = '$usuario'");


if ($eje) {
	
    mysqli_error($conexion);
	echo "<script>
	alert('El registro ha sido Modificado');
	
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admin/index.php';
	</script>";
}

}
 ?>