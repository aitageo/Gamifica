<?php  
 include('cabeza2.php');
?>

<?php
include("../Modelo/conex.php");

?>
       
        <!-- Services-->
        <section class="page-section mt-5" id="services">
            <div class="container mt-5">
                  <div class="row mt-5">
                    <div class="col-md-6">
                        
                        <center><img src="assets/img/logo.png"  width="360" height="300"></center>
                        <div class="text-center">
                           <h2 class="section-heading ">MegaS</h2>
                            <h3 class=" Mitexto">
                            Metodología  Educativa Gamificada <br>con Aprendizaje Significativo</h3>
                         </div>

                    </div>
                 <div class="col-md-6">
              
                <form method="POST" action="../Controlador/login.php"  class="mt-5 " id="formlg">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-12">

                             <div class="form-group">
                                <label>Usuario:</label>
                                <input class="form-control" name="Usuario" type="text" placeholder="Ingrese su Usuario *" required="required" data-validation-required-message="Ingrese su usuario" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label>Contraseña:</label>
                                <input class="form-control" name="Contraseña" type="password" placeholder="Ingrese su contraseña *" required="required" data-validation-required-message="Ingrese su contraseña" autocomplete="current-password"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            
                        </div>
                        <center><p>¿Todavía no tienes cuenta?, <a href="Registro.php"><b>REGÍSTRATE</b></a></p></center>
                    </div>
                    <div class="text-center">
                        
                        <button type="submit" class="btn btn-primary btn-xl text-uppercase" name="login">Ingresar</button>
                    </div>
                </form>
                <br>
                <div id="msg_error" class="alert alert_danger" role="alert" style="display:none;text-align:center; background-color: #cc310e">Error</div>
             </div>
        </div>
           
        <!-- Footer-->
        <footer class="footer mt-5">
            <hr>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">
                        Copyright &copy; DYLV Desing
                       
                        <!-- <script>
                            document.write(new Date().getFullYear());
                        </script> -->
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
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
