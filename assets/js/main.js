// SI NO SE MUESTRA CONSOLE.LOG AL SEGUIR LOS CURSOS DE CODIGO FACILITO
// ES PORQUE BOOTSTRAP 3 CAMBIO LOS NOMBRES DE LOS EVENTOS POR EJEMPLO
// en modal
// show = hide.bs.modal
// en popover
// show = show.bs.popover

// Archivo main.js para incluir mi codigo javascript personal
// 
// Ejemplo de codigo basico en javascript
// var boton = document.getElementById("miBoton");
// boton.addEventListener("click", function(){
//   alert("Boton presionado!");
// });

$(document).ready(function() {

  // carousel
  $("#carousel-example-generic").carousel({
    interval : 10000, // intervalo del slide
    pause : "hover", // permite pause cuando el usuario coloca el mouse en el carousel
  });

  // Activamos los popover en etiquetas a y button
  $('a').popover();
  $('button').popover();

  // Script para la funcionalidad de los tool tips
  // activamos los tooltip en etiquetas a y button
  $('a').tooltip();
  $('button').tooltip();


  // Popover con html en su interior 
  $("#pophtml").popover({ // Creamos un popover para un boton de html
    placement: "right",
    title: "This is my popover",
    content: "Lorem ipsum dolor sit amet, <a href='#' class='btn btn-default btn-success'>Mi enlace</a> consectetur adipisicing elit. Iusto, maxime, aperiam magnam beatae animi aut possimus fugiat esse. Tempore, eos, culpa incidunt sequi hic enim dicta beatae nulla facere quo!",
    html: true
  });

  // Popover hecho en js y convocado desde un button de html
  $("#mypopover").popover({ // pop over convocado desde un boton html
    placement: "right",
    title: "This is my popover",
    content: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, maxime, aperiam magnam beatae animi aut possimus fugiat esse. Tempore, eos, culpa incidunt sequi hic enim dicta beatae nulla facere quo!"
  });

  // METODOS PARA MANEJAR EL COROUSEL  
  $("#prev").on("click", function(){
    $("#carousel-example-generic").carousel("prev");
  });
  $("#next").on("click", function(){
    $("#carousel-example-generic").carousel("next");
  });
  $("#1").on("click", function(){
    $("#carousel-example-generic").carousel(0);
  });
  $("#2").on("click", function(){
    $("#carousel-example-generic").carousel(1);
  });
  $("#3").on("click", function(){
    $("#carousel-example-generic").carousel(2);
  });

  // EVENTOS QUE PRODUCE CAROUSEL
  $('#myCarousel').on('slide.bs.carousel', function () {
  // do something…
  });

  $('#myCarousel').on('slid.bs.carousel', function () {
  // do something…
  });





  // METODOS PARA POPOVER
  // setTimeout(function(){
  //   //seleccionamos el elemento a traves de su id y lo mostramos con show
  //   $("#pophtml").popover("show"); 
  // },2000);

  // setTimeout(function(){
  //   //seleccionamos el elemento a traves de su id y lo ocultamos con hide
  //   $("#pophtml").popover("hide"); 
  // },4000);

  // setTimeout(function(){
  //   //seleccionamos el elemento a traves de su id y lo mostramos con toggle en el caso que no este abierto
  //   $("#pophtml").popover("toggle"); 
  // },6000);

  // setTimeout(function(){
  //   //seleccionamos el elemento a traves de su id y lo destruimos del DOM con destroy
  //   // $("#pophtml").popover("destroy"); 
  // },7000);

  // disparadores de eventos o callbacks que estan escuchando cuando se invocan
  // los eventos anteriores

  // $("#pophtml").on("show.bs.popover", function(){
  //   console.log("MOSTRANDO");
  // });
  // $("#pophtml").on("shown.bs.popover", function(){
  //   console.log("MOTRADO");
  // });
  // $("#pophtml").on("hide.bs.popover", function(){
  //   console.log("OCULTANDO");
  // });
  // $("#pophtml").on("hidden.bs.popover", function(){
  //   console.log("OCULTADO");
  // });


// script para la funcionalidad de los modal 
// Opciones de inicializacion que vienen por defecto, ver pag. de bootstrap para mas informacion
// $('#jsmodal').modal({          
    // backdrop: true,
    // keyboard: true,
    // show: true,          
    // remote: "ajax.html"
// });

  // Eventos de modal: show, hide, toggle
    // Con setTimeout activaremos nuestra modal despues de 2 segundos
  // setTimeout(function(){
      //seleccionamos el elemento de nuestra modal a traves de su id y lo mostramos con show
      // $('#jsmodal').modal("show"); 
  // },2000);

  // Convocando nuevamente a esta funcion lo ocultaremos despues de 4 segundos
  // setTimeout(function(){
    //seleccionamos el elemento de nuestra modal a traves de su id y lo mostramos con show
    //$('#jsmodal').modal("hide"); 
  // },4000);

  // toggle chequea si no esta abierta la modal, la muestra!
  // setTimeout(function(){
    //seleccionamos el elemento de nuestra modal a traves de su id y lo mostramos con show
    //$('#jsmodal').modal("toggle"); 
  // },6000);     

  // Podemos usar los eventos tambien
  // 1º param = evento 2º param funcion()
  // $('#jsmodal').on('hide.bs.modal', function() {
  //   // En vez de mostrar en consola podemos hacer otras cosas como cargar elementos al DOM o un llamado a ajax
  //   console.log("Se oculto la modal.");
  // });

  // $('#jsmodal').on("hidden.bs.modal", function() {          
  //   console.log("Se termino de ocultar la modal");
  // });

  // $('#jsmodal').on("show.bs.modal", function() {          
  //   console.log("Se mostró la modal");
  // });

  // $('#jsmodal').on("shown.bs.modal", function() {          
  //   console.log("Se termino de mostrar la modal");
  // });

});
