var Module = (function () {
    var modules = {};

    return {
        create: function (name, credit) {
            if (modules[name] === undefined) {
                modules[name] = {};
            }

            modules[name].credit = function () {
                return credit;
            }
        },

        append: function (name, module) {
            if (modules[name] === undefined) {
                throw 'Module not exists';
            }

            for (var k in module) {
                modules[name][k] = module[k];
            }
        },

        get: function (name) {
            if (modules[name] === undefined) {
                throw 'Module not exists';
            }

            return modules[name];
        }
    }
})();

/* ¿Cómo registrar un módulo?
En este ejemplo he creado 2 módulos y cada vez que creamos un módulo se creará un método adicional
para obtener los créditos del módulo. */
Module.create('DatosPersonales', {
    name: 'DatosPersonales',
    description: 'Módulo que maneja la seccion de datos personales',
    version: '1.0'
});

Module.create('ExperienciaLaboral', {
    name: 'ExperienciaLaboral',
    description: 'Módulo que manjeja la seccion de experiencia laboral',
    version: '1.0'
});

/* Agregando comportamiento a los módulos */
Module.append('DatosPersonales', {
    dni: '',
    nombres: '',
    apellidos: '',
    sexo: '',
    edoCivil: '',
    telefono: '',
    idPais: '',
    provincia: '',
    ciudad: '',
    calle: '',

    capturar: function() {
        // tomar los valores que ingreso el usuario en esta seccion
    },

    mostrar: function(){
        // muestra los datos en los campos del formulario
    }
});

        // /* Agregando comportamiento a nuestros módulos */
        // Module.append('venta', {
        //     iva: 0.18,
        //     calcularIva: function(monto) {
        //         return monto * this.iva;
        //     },
        //     calcularMontoSinIva: function(monto){
        //         return monto / (1 + this.iva);
        //     }
        // });




Module.append('ExperienciaLaboral', {
    // empresa: '',
    // puesto: '',
    // nivel: '',
    // area: '',
    // personasAcargo: '',
    // idPais: '',
    // desde: '',
    // hasta: '',
    // tiempo: '',
    // iva: 0.18,

    // calcularIva: function(monto) {
    //     return monto * this.iva;
    // },
    // calcularMontoSinIva: function(monto){
    //     return monto / (1 + this.iva);
    // },

    // setEmpresa: function() {
    //     // tomar los valores que ingreso el usuario en esta seccion
    //     return this.empresa=$("input[name=nombreEmpresa]").val();
    // },

    return {
        get: function (name) {
            if (name === undefined) {
                throw 'Module not exists';
            }

            return name;
        }
    }
});


/* Obteniendo el módulo venta */
var ExperienciaLaboral = Module.get('ExperienciaLaboral'); 

/* Obtener crédito */
console.log('ExperienciaLaboral.credit()', ExperienciaLaboral.credit());


$(document).ready(function () {
    // $("input[name=nombreEmpresa]").change(function(){
    //     alert("The text has been changed.");
    // });

    $("input[name=nombreEmpresa]").on('change keyup paste', function () {
       alert('pasando');
       console.log('ExperienciaLaboral.setEmpresa', ExperienciaLaboral.setEmpresa) ;
    });
});