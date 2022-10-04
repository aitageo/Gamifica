<?php
include("Menu.php");
error_reporting(0); 
?>  

  <!-- CONTENIDO PRINCIPAL DE LA PÁGINA -->
    <!-- Main content -->
    <section class="content-wrapper mt-5" class="d-flex flex-column" style="background-color:#ffffff;">
      <div class="container">
         <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 " >
            <h1 class="h3 mb-0 text-gray-800" style="color: #047c81;">Usuarios</h1>
          </div>
        <div class="row">
          <!-- left column -->

          <div class="col-md-12 ">
            <!-- Botón GUARDAR -->
              <div class="navbar navbar-expand navbar-white navbar-light justify-content-end">    
                  <button type="button" class="btn btn-success justify-content-end "  data-toggle="modal" data-target="#staticBackdrop" style="background-color: #047c81;" >
                  <i class="fas fa-plus-circle"></i>
                  </button>
              </div>
      <!-- Modal GUARDAR USUARIO-->
      <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title " id="staticBackdropLabel" >Agregar Usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                        <!-- INICIO FORMULARIO -->
                    <form role="form" method="POST" action="../../../Controlador/Guardarusua.php">
                    <div class="card-body">

                      <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="col-md-6">Identificación</label>
                            <input type="number" class="form-control" name="idusuario" placeholder="Identificación">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Tipo Documento</label>
                            <select class="form-control" name="TipoDoc" required>
                        <!-- Realizamos  una consulta a la tabla Tipo Documento para que me llene el Select-->
                      <?php  
                        include( '../../../Modelo/conex.php'); 
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT `idTipoDoc`, `NombreTipoDoc` FROM `tipodocumento`";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row = $eje->fetch_row()){
                            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                          }
                        ?>
                  </select>
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="col-md-6">Nombre:</label>
                            <input type="text" class="form-control" name="NombUsua" placeholder="Nombre">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Apellido</label>
                            <input type="text" class="form-control" name="ApellUsua" placeholder="Apellido">
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="col-md-6">Tipo Usuario:</label>
                            <select class="form-control" name="TipoUsua">
                        <?php  
                            include( '../../../Modelo/conex.php'); 

                              # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                              $sql = "SELECT `idTipoUsua`, `NombreTipoUsua` FROM `tipousuario`";
                              $eje1 = $conexion->query($sql);
                              # Mostramos a través de un ciclo todas las opciones válidas:
                               while($fila = $eje1->fetch_row()){
                                echo '<option value="'.$fila[0].'">'.$fila[1].'</option>';
                              }
                            ?>
                  </select>
                          </div>
                          
                          
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="col-md-6">Teléfono:</label>
                            <input type="text" class="form-control" name="CeluUsua" placeholder="Teléfono">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Correo</label>
                            <input type="email" class="form-control" name="CorreoUsua" placeholder="Correo">
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="col-md-6">Clave</label>
                            <input type="text" class="form-control" name="PassUsua" placeholder="Contraseña">
                          </div>
                          
                      </div>
                    </div>
                      <div class="card-footer">
                      <button type="reset" class="btn btn-secondary">Limpiar</button>
                        <button type="submit" class="btn btn-primary" name="BtnGuardar">Guardar</button>
                      </div>
                    </form>
                 </div>
            </div>
          </div>
       </div>
 </div>
</div>  <hr>


  <!-- CONSULTA DE USUARIOS -->
  <div class="card card-primary">
                <div class="card-header" style="background-color: #eafafa;">
                  <h3 class="card-title" style="color: #000;">Listado de Usuarios</h3>
                </div>
      

      <table id="tablaUsua" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                          <tr>
                             <th>Identificación</th>
                             <th>Tipo Doc.</th>
                             <th>Tipo Usuario</th>
                             <th>Nombres</th>
                             <th>Apellidos</th>
                             <th>Clave</th>
                             <th>Teléfono</th>
                             <th>Correo</th>
                             <th>Modificar</th>
                             <th>Eliminar</th>
                          </tr>
                    </thead>
                    <tbody>
                      <!-- Realizamos la consulta a la base de datos -->
                     <?php 
                    include( '../../../Modelo/conex.php'); 
                  $cons = $conexion -> query("SELECT `idUsuario`, tipodocumento.NombreTipoDoc, tipousuario.NombreTipoUsua `idTipoUsua`, `NombreUsua`, `ApellidoUsua`,  `ClaveUsua`,  `CelUsua`, `CorreoUsua` FROM `usuarios` INNER JOIN tipousuario ON usuarios.idTipoUsua = tipousuario.idTipoUsua INNER JOIN tipodocumento ON usuarios.idTipoDoc = tipodocumento.idTipoDoc ");
                    
                    while ($row = $cons -> fetch_row()) {
                     
                   ?>

                  <tr>
                    
                    <td><?php echo number_format(''.$row[0].''); ?></td>
                    <td><?php echo ''.$row[1].''; ?></td>
                    <td><?php echo ''.$row[2].''; ?></td>
                    <td><?php echo ''.$row[3].''; ?></td>
                    <td><?php echo ''.$row[4].''; ?></td>
                    <td><?php echo ''.$row[5].''; ?></td>
                    <td><?php echo ''.$row[6].''; ?></td>

                    <td><?php echo ''.$row[7].''; ?></td>
                   
                  <!-- Si el usuario presiona el botòn Modificar ira a el archivo Modificarusua, si presiona eliminar irà a Borrarusua en la Carpeta Control--> 
                    <!-- Onclick nos dice a donde se va a dirigir cuando presione el botón-->    
                         
                     <td> <center>
                      <button type="button" class="btn btn-primary btn-sm"  name="ModifiUsua" onclick="location='ModifiUsua.php?id=<?php echo ''.$row[0].'' ?>'" style="background-color: #ff5c51; border-color:#ff5c51 ;"><i class="fas fa-pencil-alt" ></i></button>
                      

                     <td> <center><button type="submit" class="btn btn-danger btn-sm"  value="Eliminar" name="Borrarusua" onclick="location='../../../Controlador/Borrarusua.php?id=<?php echo ''.$row[0].'' ?>'" style="background-color: #0a8d8d; border-color:#0a8d8d ;" ><i class="fas fa-trash-alt"></i></i></span></button></center></td>
                       
                  </tr>
                  <?php } 

                  ?>
    </table>
  </div>
  


 
 


  <!-- PIE DE PÁGINA -->
  <footer class="mt-5">
    <center> <strong><h6>Metodología Educativa Gamificada <br>
            con Aprendizaje Significativo</h6> </strong> </center>
  </footer>




<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
