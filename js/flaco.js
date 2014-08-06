var x;                                  //variable x
x=$(document);                          //x igual objeto documento
x.on("ready", inicio);                        //cuando el documento este listo, ejecutar la funcion inicio
x.on("ready", correo); 
x.on("ready", correoportada); 

        function inicio(){
            cargar(1);
        }
        
        function cargar(num){                       //funcion enviar
                
                  $.ajax({                          //metodo ajax
                              async:true,           //comunicacion asincronica: verdadera
                              type: "GET",          //tipo de transaccion: Post
                              dataType: "html",     //tipo de datos a enviar
                              contentType: "application/x-www-form-urlencoded",//tipo de contenido
                              url:"componentes/proceso_port.php",//pagina que procesara la peticion
                              data:{numero:num},        //envie de variable(s) por url $anio=v
                              beforeSend:inicioEnvio,//funcion a ejecutar antes de la transaccion (ejecutar funcion inicioEnvio)
                              success:llegada,      //funcion a ejecutar en caso de tener exito(ejecutar funcion llegada)
                              timeout:4000,         //tiempo de espera 4000 milisegundos=4segundos
                              error:problemas,      //fencion a ejecutar cuando exista problemas si superamos el timeout(ejecutar fucion problemas) 
                            }); 
                  return false;                     //la funcion no retorna valor
        }
        
        function inicioEnvio(){             
                    
                      var x=$("#portafolio");        
                      x.html('<img src="loading.gif">');        
        }
        function llegada(datos){                
                    
                      $("#portafolio").html(datos);  
        }
        function problemas(){               
                    
                      $("#portafolio").html('<img src="ups.gif"><br><h2>Problemas en el Servidor</h2>');
        }

function correo(){
  $("#contactoinnditec").validate();
}
function correoportada(){
  $("#contactoportada").validate();
}


//slideshow
$(function slider() {
      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 700,
        namespace: "callbacks",
      });
    });


//google analitycs
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-49490718-1', 'innditec.com');
      ga('send', 'pageview');
