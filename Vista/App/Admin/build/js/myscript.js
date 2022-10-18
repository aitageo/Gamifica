alert("cargado");
// function ch(urlPagina){ // Esta función es la que se usa para que los menus del dashboard
//     // carguen las diferentes páginas en el contenedor.
//     $.ajax({   // Inicio petición ajax
//         type: "POST",
//         url:urlPagina, // se eindica la variable recibida como parámeteo de la función la cual
//         // contiene el nombre del archivo que se quiere cargar en el contenedor
//         data:{},
//         success: function(datos){       
//             $('#qa').html(datos); // esta instrucción pega los datos obtenidos de la página en un
//             // div que tiene como id="qa" que ese sería el contenedor
//         }
//     });
// }


const load = urlMenu => {
    $.ajax({
        type:  "POST",
        url:urlMenu,
        data: {},
        success: data => {
            $('#qCarga').html(data);
        }
    })
}



function guardarUsuario(){ // Funcion Guardar
    $.ajax({ // Inicia la petición ajax
        data:  { 
            "fechaRadicado" : $('#fechaRadicado').val(), // esta instrucción tiene dos partes, 
            // la primera a la izquierda de los : es el nombre de la variable como será enviada
            // por post, recuerden que en el controlador se recibía así $_POST[''], y la parte derecha 
            // despues de los : que es una instrucción de Jquery que obtiene el valor del campo del
            // formulario en la vista, el campo tiene como id="fechaRadicado"
            "numeroRadicado" : $('#numeroRadicado').val(), // otra variable que se envía pos post
            "nit" : $('#nit').val(), // otra variable que se envía por post
            "metodo" : "g" // variable que se envía por post, pero esta es la que indica en el
            // controlador que la acción a invocar es Guardar, recuerden el Switch. en el caso 'g'
        }, //datos que se envian a traves de ajax
        url:   '../../Controlador/CtrolUsuario.php', //archivo que recibe la peticion
        type:  'post', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                alert(response); // este alert lo que hace es mostrar lo que el controlador dentro
                // de la función guardar muestre en el echo
                actualizarTablaUsuarios(); // esta función lo que hace es actualizar los registros
                // que se muestran en la tabla de la vista.
        }
    });
}

function modificarUsuario(){ // Función Modificar
    $.ajax({ // Inicia la petición ajax
        data:  { 
            "fechaRadicado" : $('#fechaRadicadoM').val(), // variable a enviar por post
            "nroRadicado" : $('#nroRadicadoM').val(), // variable a enviar por post
            "nit" : $('#nitM').val(), // variable a enviar por post
            "codComunicacion" : $('#codComunicacionM').val(), // variable a enviar por post
            "metodo" : "m" // variable a enviar por post, indica la función a invocar en el controlador
        }, //datos que se envian a traves de ajax
        url:   '../../Controlador/CtrolUsuario.php', //archivo que recibe la peticion
        type:  'post', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                alert(response); // alert que muestro el texto mostrado por el echo en el controlador
                actualizarTablaUsuarios(); // actualizar la tabla de la vista.
        }
    });
    $("#modificarModal").modal("hide"); // esta instrucción cierra una ventana Modal que se abre cuando
    // de va a editar una comunicación, recuerden que cuando se presiona clic se construye el formulario
    // en el controlador y se muestra en un modal, luego cuando se guardan los cambios se llama esta 
    // función y una vez enviados los datos para modificar se cierra el modal.
}

function eliminarUsuario(codUsua){ // Función Eliminar, esta si recibe un parámetro, es el código
    // que identifica el regístro a borrar
    $.ajax({ // Inicia la Petición ajax
        data:  { 
            "codComunicacion" : codUsua, // variable a enviar por post
            "metodo" : "e" // variable a enviar por post, indica la función a invocar en el controlador
        }, //datos que se envian a traves de ajax
        url:   '../../Controlador/CtrolUsuario.php', //archivo que recibe la peticion
        type:  'post', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                alert(response);  // alert que muestro el texto mostrado por el echo en el controlador
                actualizarTablaUsuarios(); // actualizar la tabla de la vista.
        }
    });
}

function consultarComunicacion(codUsua){ // función que se utiliza para consultar los datos de un regístro
    // específico, esta se llama cuando se quiere modificar alguno, entonces llama esa función del 
    // controlador que construye en la variable $formHtml y al final le da echo, aquí se usará.

    $.ajax({ // Inicia la petición ajax
        data:  { 
            "codComunicacion" : codUsua, // variable a enviar por post
            "metodo" : "c"// variable a enviar por post, indica la función a invocar en el controlador
        }, //datos que se envian a traves de ajax
        url:   '../../Controlador/CtrolUsuario.php', //archivo que recibe la peticion
        type:  'post', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $("#bodyUsuarioModificar").text(""); // aquí borramos el contenido html que hay dentro del div
            // con id ="bodyUsuarioModificar"
            $("#bodyUsuarioModificar").append(response); // aquí pegamos todo ese código html que generamos 
            // en el controlador, que era el formulario con los datos traidos de la base de datos.
        }
    });
    $("#modificarModal").modal("show"); // Aquí una vez ya pegamos en el html el formulario con los datos, 
    // de ponemos la propiedad show (mostrar) a la ventana modal para que se muestre.
}

function actualizarTablaUsuarios() { // este es la función que tanto llamabamos para actualizar
    // la tabla que muestra todos los regístros de la tabla en la base de datos.
    $.ajax({ // inicia la petición ajax
        data:  { 
            "metodo" : "l"  // variable a enviar por post, indica la función a invocar en el controlador
        }, //datos que se envian a traves de ajax
        type: 'POST', //método de envio
        url: '../../Controlador/CtrolUsuario.php', //archivo que recibe la peticion
        dataType: 'html', // tipo de información que se va a obtener
        success: function (data) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $('tbody').text(""); // aquí borramos el contenido del tbody, osea el cuerpo que hay dentro de
            // la tabla 
            $('tbody').append(data); // aquí pegamos todo ese código html que generamos 
            // en el controlador, que era las filas y columnas con los datos traidos de la base de datos.
        }
      });
  }


  function ModificarUsua(){
  $("ModificaUsua").submit(function (e) { 
    e.preventDefault();
    var id = $(this).attr("idusuario");
    alert(id);
    
  });
}

