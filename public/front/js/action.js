$(document).ready(function(){
     $('#formPsicologos').formValidation({
         framework:'bootstrap',
           icon: {
             valid: 'glyphicon glyphicon-ok',
             invalid: 'glyphicon glyphicon-remove',
             validating: 'glyphicon glyphicon-refresh'
           },fields:{
             cedula:{
                   validators:{
                         notEmpty:{
                             message:"El campo es requerido y no puede dejarse vacio"
                         }
                   }
               },
               nombre:{
                   validators:{
                       notEmpty:{
                           message:"El campo es requerido y no puede dejarse vacio"
                       }
                   }
               },
               apePaterno:{
                   validators:{
                       notEmpty:{
                           message:"El campo es requerido y no puede dejarse vacio"
                       }
                   }
               },
               apeMaterno:{
                   validators:{
                       notEmpty:{
                           message:"El campo es requerido y no puede dejarse vacio"
                       }
                   }
               },
               especialidad:{
                   validators:{
                       notEmpty:{
                           message:"El campo es requerido y no puede dejarse vacio"
                       }
                   }
               },
               phone:{
                   validators:{
                       digits:{
                           message:"Solo se aceptan numeros"
                       },
                       notEmpty:{
                           message:"El campo es requerido y no puede dejarse vacio"
                       }
                   }
               },
               "image-2":{
                   validators:{
                       notEmpty:{
                           message:"El campo es requerido y no puede dejarse vacio"
                       }
                   }
               }
           }
     }).on('success.form.fv', function(e) {
         e.preventDefault();
         $.ajax({
             url:"/psicologos-registro/guardarpsicologos",
             method:"post",
             data:$(this).serialize(),
             dataType:"json",
             success: function (resp) {
                 alert("Datos guardados correctamente");
                 $("input[name=cedula]").val("");
                 $("input[name=nombre]").val("");
                 $("input[name=apePaterno]").val("");
                 $("input[name=apeMaterno]").val("");
                 $("input[name=especialidad]").val("");
                 $("input[name=phone]").val("");
                 $("input[name=image-2]").val("");
             },error: function (jqXHR,estado,error) {

             },complete:function (jqXHR,estado) {
             }
         });
     });
})