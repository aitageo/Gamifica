
<?php  
 include('cabeza2.php');
?>
       
        <!-- Services-->
        <section class="page-section " id="services">
            <div class="container ">
                  <div class="row">
                    <div class="col-md-6 mt-5">
                        
                        <center><img src="assets/img/logo.png"  width="360" height="300"></center>
                        <div class="text-center">
                           <h2 class="section-heading ">MegaS</h2>
                            <h3 class=" Mitexto">
                            Metodología  Educativa Gamificada <br>con Aprendizaje Significativo</h3>
                         </div>

                    </div>
                 <div class="col-md-6">
              
                <form class="mt-5 " id="contactForm" name="sentMessage" novalidate="novalidate"   method="post" action="../Controlador/Guardarusua.php"  >
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-12">
                              <center> <h3>Formulario de Registro</h3></center> <br>
                             <div class="form-group">
                                <label>Nombre:</label>
                                <input class="form-control" id="nombre" type="text"  name="NombUsua" placeholder="Ingrese su Nombre" required="required" data-validation-required-message="Ingrese su Nombre" />
                                <p class="help-block text-danger"></p>
                                
                            </div>
                            <div class="form-group">
                                <label>Apellidos:</label>
                                <input class="form-control" id="apellidos"  name="ApellUsua" type="text" placeholder="Ingrese sus Apellidos *" required="required" data-validation-required-message="Ingrese sus Apellidos" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label>Tipo de Identificación:</label>
                                <Select class="form-control" id="Tipo" type="text"  name="TipoDoc" placeholder="Seleccione su identificacion*" required="required" data-validation-required-message="Ingrese su Nombre">
                                    <option value="1">Cédula</option>
                                     <option value="2">Tarjeta de Identifidad</option>
                                      <option value="3">Cédula de Extranjería</option>
                                       <option value="4">PEP</option>
                                </Select>
                            </div>
                            <div class="form-group">
                                <label>Tipo de Usuario:</label>
                                <Select class="form-control" id="Tipo" type="text"  name="TipoUsua" placeholder="Seleccione su identificacion*" required="required" data-validation-required-message="Ingrese su Nombre">
                                    <option value="1">Administrador</option>
                                     <option value="2">Aprendiz</option>
                                      <option value="3">Instructor</option>
                                </Select>
                            </div>
                            <div class="form-group">
                                <label>Identificación:</label>
                                <input class="form-control" id="identificacion" type="number"  name="IdentificaUsua" placeholder="Ingrese su numero de identificacion *" required="required" data-validation-required-message="Ingrese su identificación" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label>Correo Electrónico</label>
                                <input class="form-control" id="email" type="email" name="CorreoUsua"  placeholder="Ingrese su correo electronico *" required="required" data-validation-required-message="Ingrese su correo electrónico" />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group">
                                <label>Teléfono:</label>
                                <input class="form-control" id="telefono" type="text"  name="CeluUsua"   placeholder="Ingrese  su telefono *" required="required" data-validation-required-message="Ingrese su número telefónico" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label>Contraseña:</label>
                                <input class="form-control" id="password" type="password"   name="PassUsua"  placeholder="Ingrese su contraseña *" required="required" data-validation-required-message="Ingrese su correo electrónico" />
                                <p class="help-block text-danger"></p>
                            </div>
                            
                        </div>
                        <center><p>¿Ya tienes cuenta?, <a href="Ingresar.php"><b>INICIA SESIÓN</b></a></p></center>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit" name="BtnGuardar" >Registrar</button>
                    </div>
                </form>
             </div>
        </div>
           
        <!-- Footer-->
        <footer class="footer mt-5">
            <hr>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">
                        Copyright &copy; DYLV Desing
                       
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Política de Privacidad</a>
                        <a href="#!">Términos y condiciones</a>
                    </div>
                </div>
            </div>
        </footer>
       
                    
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
       <!-- <script src="assets/mail/contact_me.js"></script>-->
        <!-- Core theme JS-->
        <script src="./js/scripts.js"></script>
    </body>
</html>
