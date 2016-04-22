
function suma(a, b, c) {
    var suma = a + b + c;
    alert(suma);
}

function multiplicacion() {
    var num1 = document.getElementById('num1').value;
    var num2 = document.getElementById('num2').value;

    document.getElementById('num3').value = num1 * num2;

}

var contadorExterno = 0;
function acumulaA() {
    var contadorInterno = 0;
    contadorInterno++;
    contadorExterno++;
    alert("interno: " + contadorInterno + " Externo:" + contadorExterno);
}

function funcion2() {
    var contadorExterno = 20;
    alert("interno: " + contadorInterno + " Externo:" + contadorExterno);
}
function funcion3() {
    contadorExterno = 40;
    contadorInterno = 50;
    alert("interno: " + contadorInterno + " Externo:" + contadorExterno);
}

function funcion4() {
    contadorInterno = contadorInterno + 20;
    contadorExterno = contadorExterno + 10;
    alert("interno: " + contadorInterno + " Externo:" + contadorExterno);
}

$(document).ready(function () {
    //código a ejecutar cuando el DOM está listo
    // para recibir instrucciones.
    $("#capa1").mouseenter(function (evento) {
        $("#mensaje1").css("display", "block");
    });
    $("#capa1").mouseleave(function (evento) {
        $("#mensaje1").css("display", "none");
    });


    $("a").mouseover(function (event) {
        $("#capa2").addClass("clasecss");
    });
    $("a").mouseout(function (event) {
        $("#capa2").removeClass("clasecss");
    });
    
    
    $("#mayoria_edad").click(function(evento){
      if ($("#mayoria_edad").prop("checked")){
          $("#formulariomayores").show(10000);
        // $("#formulariomayores").css("display", "block");
      }else{
          $("#formulariomayores").hide("slow");
        // $("#formulariomayores").css("display", "none");
      }
   });
   
   
   
   $("#ocultar").click(function(event){
    event.preventDefault();
    $("#capaefectos").hide("slow");
   });

   $("#mostrar").click(function(event){
    event.preventDefault();
    $("#capaefectos").show(10000);
   });
   
   
   
});


