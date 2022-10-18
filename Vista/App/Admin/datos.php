<?php
  include( '../../../Modelo/conex.php'); 

  $iddeusuario = $_POST['iddeusuario'];//viene de la linea 179 y se obtiene por post aqui
 // $IdentificaUsua = $_POST['IdentificaUsua'];
  $query ="SELECT  NombreUsua,IdentificaUsua,ApellidoUsua,CelUsua,CorreoUsua,ClaveUsua FROM usuarios where idUsuario='".$iddeusuario."'";
  $query = $conexion->query($query);

  $row = $query->fetch_row();

  $data = $row;

  echo implode(",",$data);
  // var_dump(json_encode($data));
  die();
?>