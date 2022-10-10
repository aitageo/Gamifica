<?php
include("Menu.php");
error_reporting(0); 
$IdUsuario = $_GET['id'];
  include( '../../../Modelo/conex.php'); 
   $Id =  $_REQUEST['id'];
           # Consultamos ën la tabla usuario
   $sql = "SELECT * from usuario WHERE  idUsuario = '$Id'";
   $ejec = $conexion->query($sql);
   while($fila = $ejec->fetch_row()){
   
?>

  <!-- CONTENIDO PRINCIPAL DE LA PÁGINA -->
    <!-- Main content -->
    <section class="content-wrapper mt-5" class="d-flex flex-column">
      <div class="container">
         <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-user-edit"></i>Modificar Usuario</h1>
          </div>
        <div class="row">
          <div class="col-md-12">
                 <form role="form" method="POST" action="../../../Controlador/Actualizausua.php">
                    <div class="card-body">
                      <input type="hidden" class="form-control" name="idusuario" value="<?php echo $fila[0] ?>">
                         
                      <div class="form-row">
                                                 
                          <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Tipo Documento</label>
                            <select class="form-control" name="TipoDoc" required value="<?php echo $fila[1] ?>" selected>
                        <!-- Realizamos  una consulta a la tabla Tipo Documento para que me llene el Select-->
                      <?php  
                        include( '../../../Modelo/conex.php'); 
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT `idTipoDoc`, `DescripTipoDoc` FROM `tipodocumento`";
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
                            <input type="text" class="form-control" name="NombUsua" placeholder="Nombre" value="<?php echo $fila[3] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Apellido</label>
                            <input type="text" class="form-control" name="ApellUsua" placeholder="Apellido" value="<?php echo $fila[4] ?>">
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="col-md-12">Tipo Usuario:</label>
                           <select class="form-control" name="TipoUsua" required value="<?php echo $fila[2] ?>" selected>
                        <?php  
                            include( '../../../Modelo/conex.php'); 

                              # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                              $sql = "SELECT * from tipousuario";
                              $eje1 = $conexion->query($sql);
                              # Mostramos a través de un ciclo todas las opciones válidas:
                               while($row2 = $eje1->fetch_row()){
                                echo '<option value="'.$row2[0].'">'.$row2[1].'</option>';
                              }
                            ?>
                  </select>
                          </div>
                          
                          
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="col-md-6">Teléfono:</label>
                            <input type="text" class="form-control" name="CeluUsua" placeholder="Teléfono" value="<?php echo $fila[6] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Correo</label>
                            <input type="email" class="form-control" name="CorreoUsua" placeholder="Correo" value="<?php echo $fila[7] ?>">
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="col-md-6">Clave</label>
                            <input type="text" class="form-control" name="PassUsua" placeholder="Contraseña" value="<?php echo $fila[5] ?>">
                          </div>
                          
                      </div>
                    </div>
                      <div class="card-footer">
                      <button type="reset" class="btn btn-secondary">Limpiar</button>
                        <button type="submit" class="btn btn-primary" name="BtnModifica">Modificar</button>
                      </div>
                    </form>
                 <?php  } ?>
            </div>
         </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
