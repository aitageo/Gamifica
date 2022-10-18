<?php
include("Menu.php");
error_reporting(0); 
?>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

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
                  <button type="button" class="btn btn-success justify-content-end "  data-toggle="modal" data-target="#staticBackdrop"  style="background-color: #047c81;" >
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
      

      <table id="example" class="table table-striped table-bordered">
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
                  $query = $conexion -> query("SELECT `idUsuario`, tipodocumento.NombreTipoDoc, tipousuario.NombreTipoUsua `idTipoUsua`, `NombreUsua`, `ApellidoUsua`,  `ClaveUsua`,  `CelUsua`, `CorreoUsua` FROM `usuarios` INNER JOIN tipousuario ON usuarios.idTipoUsua = tipousuario.idTipoUsua INNER JOIN tipodocumento ON usuarios.idTipoDoc = tipodocumento.idTipoDoc ");
                    
                    while ($row = $query -> fetch_row()) {
                     
                      $datos= $row[0];
                      $row[1];
                      $row[2];
                      $row[3];
                      $row[4];
                      $row[5];
                      $row[6];
                      $row[7];
                      

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
                    
                      <button type="button" class="btn btn-primary btn-sm"  onclick="ModificaUsua('<?php echo $row[0];?>');"  name="ModificaUsua" data-toggle="modal" data-target="#ModifiUsua" style="background-color: #F7e71c; border-color:#F7e71c;"><i class="fas fa-pencil-alt" ></i></button>
                     
                        <!----Modal Actualizar usuario-->
                      <div class="modal fade" id="ModifiUsua" data-backdrop="static" data-keyboard="false"  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      
                      <script>

                        function ModificaUsua(data){
                          //console.log(data);
                          $.post('./datos.php',{
                            iddeusuario: data
                          },
                          function( data,status){
                            //defino data1 para guadar datos separados por ,
                            let data1 = data.split(",");
                            //defino vector de 6 posiciones
                            var vector = new Array(6);
                            //ingreso en data1 arrayform de data1                              
                            data1 = Array.from(data1);
                            //console.log(data1[0]);

                            //ciclo para recorrer el array   
                            for(let i =  0; i < data1.length ;i++)
                            {
                              //defino test para almacenar data en indice i
                              let test = data1[i];       
                              //quitar caracteres ( optimizar con regx para 1 sola linea)
                              test = test.replace('"','');                    
                              test = test.replace('[','');
                              test = test.replace(']','');                   
                              test=test.replace(/["]/g, '');
                              //agrego al vector el valor limpio  
                              vector[i] = test; 
                            }

                            document.getElementById("NombUsua").value= (vector[0]);
                            document.getElementById("IdentificaUsua").value=(vector[1]);
                            document.getElementById("ApellidoUsua").value=(vector[2]);
                            document.getElementById("CelUsua").value=(vector[3]);
                            document.getElementById("CorreoUsua").value=(vector[4]);
                            document.getElementById("ClaveUsua").value=(vector[5]);
                          }
                          
                          )}

                      </script>
                    <div class="modal-dialog modal-xl">
             <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title " id="staticBackdropLabel" >Modificar Usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                        <!-- INICIO FORMULARIO MODIFICAR USUARIO-->
                    <form role="form" method="POST"action="../../../Controlador/Actualizausua.php" >
                    <div class="card-body">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="col-md-6">Identificación</label>
                            <input type="hidden" class="form-control" name="idUsuario" value="<?php echo $row[0];?>">
                            <input type="text" class="form-control" name="IdentificaUsua" placeholder="Identificación" id="IdentificaUsua">
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
                            <input type="text" class="form-control" name="NombUsua" id="NombUsua" placeholder="Nombre">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Apellido</label>
                            <input type="text" class="form-control" name="ApellUsua" placeholder="Apellido" id="ApellidoUsua">
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
                            <input type="text" class="form-control" name="CeluUsua" placeholder="Teléfono" id="CelUsua">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Correo</label>
                            <input type="email" class="form-control" name="CorreoUsua" placeholder="Correo" id="CorreoUsua">
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="col-md-6">Clave</label>
                            <input type="text" class="form-control" name="PassUsua" placeholder="Contraseña" id="ClaveUsua">
                          </div>
                          
                      </div>
                    </div>
                      <div class="card-footer">
                      <button type="reset" class="btn btn-secondary">Limpiar</button>
                        <button type="submit" class="btn btn-primary ModificaUsua" idusuario="<?php $row[0];?>" id="ModificaUsua" name="BtnModifica">Guardar</button>
                      </div>
                    </form>
                 </div>
            </div>
          </div>
       </div>
 </div>
</div>
      <!----Fin Modal Actualizar usuario-->
          <td> <center><button type="submit" class="btn btn-danger btn-sm"  value="Eliminar" name="Borrarusua" onclick="location='../../../Controlador/Borrarusua.php?id=<?php echo ''.$row[0].'' ?>'" style="background-color: #E41400; border-color:#E41400;" ><i class="fas fa-trash-alt"></i></i></span></button></center></td>
                       
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
<script src="./build/js/myscript.js"></script>
</body>
</html>
