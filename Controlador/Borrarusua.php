<?php
include ('../Modelo/conex.php');
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(E_ALL); 

$id = $_REQUEST['id'];
echo $id;

$Estado = "Inactivo";


			$del = $conexion->query("UPDATE usuarios SET Estado= '$Estado' where idUsuario=$id");
				if ($del) {
					echo "<script>
					alert('Registro Eliminado');
					location.href='../Vista/App/Admin/Usuarios.php';
					</script>".mysqli_error($conexion);
				}else{
					echo "<script>
					alert('El registro no pudo ser eliminado');
					location.href='../Vista/App/Admin/Usuarios.php';
					</script>".mysqli_error($conexion);

				}

//"DELETE`idUsuario`, tipodocumento.NombreTipoDoc, tipousuario.NombreTipoUsua `idTipoUsua`, `NombreUsua`, `ApellidoUsua`,  `ClaveUsua`,  `CelUsua`, `CorreoUsua` FROM `usuarios` INNER JOIN tipousuario ON usuarios.idTipoUsua = tipousuario.idTipoUsua INNER JOIN tipodocumento ON usuarios.idTipoDoc = tipodocumento.idTipoDoc "
		
 ?>
 