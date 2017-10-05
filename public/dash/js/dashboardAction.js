$(document).ready(function () {
         $('#myTable').DataTable();
    $("#myModal").on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);  // Button that triggered the modal
        var titleData = button.data('title'); // Extract value from data-* attributes
        $(this).find('.modal-title').text(titleData + ' Form');
    });

    $(document).on("click","#bStatusChange",function () {
         var id=$(this).data('cedula');
         $('input[name=cedula]').val(id);
    });

    $(document).on("click","#bUpdateStatus",function (e) {
        e.preventDefault();
        var cedula=document.getElementsByName('cedula')[0].value;
        var status=document.getElementsByName('status')[0].value;

        $.ajax({
            url:"/dashboard/todos-psicologos/cambiar-status",
            method:"post",
            data:{cedula:cedula,status:status},
            dataType:"json",
            success:function (resp) {
                console.log(resp);
                $("#"+resp.cedula).remove();
            }
        });
    });


    $(document).on("click","#bStatusChangeC",function (e) {
        var id= $(this).data('cid');
        $('input[name=cgid]').val(id);
    });

    $(document).on("click","#bUpdateStatusC",function (e) {
        e.preventDefault();
        var cgid=document.getElementsByName('cgid')[0].value;
        var status=document.getElementsByName('status')[0].value;

        $.ajax({
            url:"/dashboard/comentarios-pendientes/cambiar-status",
            method:"post",
            data:{cgid:cgid,status:status},
            dataType:"json",
            success:function (resp) {
                console.log(resp);
                $("#"+resp.cid).remove();
            }
        });
    });

    $(document).on("click",'#bComentaryDelete',function (e) {
        e.preventDefault();
        var id = $(this).data('cidelete');
        swal({
                title: "¿Desea eliminar este comentario?",
                text: "Nunca podra recuperar este dato",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "¡Si!",
                cancelButtonText: "No",
                closeOnConfirm: false
            },
            function(){

                $.ajax({
                    url:"/dashboard/comentarios-pendientes/deletecomentary",
                    method:"post",
                    data:{id:id},
                    dataType:"json",
                    success:function (resp) {
                        console.log(resp);
                        swal("¡Eliminado!", "El comentario fue  eliminado correctamente.", "success");
                        $('#'+resp.id).remove();
                    }
                })

            });
    });


});