<?php
session_start();
include('../Modelo/conex.php');

$usuarios = $conexion->query("SELECT NombreUsua,idTipoUsua FROM usuarios
WHERE NombreUsua = '".$_POST['Usuario']."'
AND ClaveUsua = '".$_POST['Contraseña']."'
");

if ($usuarios->num_rows == 1) {
     $data = $usuarios->fetch_assoc();
     echo json_encode(array('error'=> false, 'tipo'=>$data['idTipoUsua'],$data['NombreUsua']));
} else {
     echo json_encode(array('error'=>true));
}

$_SESSION['user']=$data['NombreUsua'];
$msj="Bienvenido ".$_SESSION['user']."";

$conexion->close();








//    if($fila[0]==$user && $fila[1]==$pass){
// 	//echo 'Could not run query: ' . mysql_error();
//     	$_SESSION['user']=$fila[0];
// 		//$_SESSION['usuario']=$fila[2];
//         $_SESSION['tipo']=$fila[2];
    	
//     	$msj="Bienvenido ".$_SESSION['user']."";
// 			switch ($_SESSION['tipo']) {
// 				case '1':
// 					# code...
// 					header('location:../Vista/App/Admin/index.php?mensaje=$msj');
// 					break;
// 				case '2':
// 					# code...
// 					header('location:../Vista/index.php?mensaje=$msj');
// 					break;
// 				default:
// 					# code...
// 					//header('location:../Vista/index.php?mensaje=$msj');
// 					break;
// 			}

//     }
//     else{
//     	echo "<script>
// 					alert('Usuario y/o Contraseña Incorrectos');
// 					header('location:../Vista/index.php?mensaje=$msj');
// 					</script>";

    
//     }
// }
//

?>
