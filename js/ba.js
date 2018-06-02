
    var site = (function () {
        var version = 'Vr 1.0';

        var experiencia = {
            empresa: '',
            puesto: '',
            nivel: '',
            area: '',
            personasAcargo: '',
            idPais: '',
            desde: '',
            hasta: '',
            tiempo: '',

            mostrarEmpresa: function () {
                return this.empresa;
            }
        };

        /* simple método privado */
        var metodoPrivado = function () {
           console.log('Soy un metodo privado');
           console.log(experiencia.empresa, 'tiene', experiencia.mostrarEmpresa());
        };

        var registerEvents = function() {
          $("input[name=nombreEmpresa]").on('change keyup paste', this.scrollTop) ;
        };

        var scrollToTop = function() {
          alert('aca va la accion');

        };

        /* retornando un objeto literal */
        return {
                version : version,

                experiencia: experiencia,

                init: function() {
                    registerEvents();
                },

                metodoPublico : function () {
                   metodoPrivado();
                   console.log('Soy un metodo publico');
                }
       }
    })();

///------------------------------------

$(document).ready(function () {
    // $("input[name=nombreEmpresa]").change(function(){
    //     alert("The text has been changed.");
    // });

    // $("input[name=nombreEmpresa]").on('change keyup paste', function () {
    //    alert('pasando');
    //    console.log('ExperienciaLaboral.setEmpresa', ExperienciaLaboral.setEmpresa) ;
    // });

    console.log('site.init()', site.init()) ;
});