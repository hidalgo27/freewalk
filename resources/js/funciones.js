function borrarDestino(destino_id,destino){
    Swal.fire({
        title: 'Esta seguro de borrar el destino:'+destino+'?',
        text: "Solo se borrara los destinos que no tengan algun dato asociado!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Borrar!',
        cancelButtonText: 'Cancelar!'
      }).then((result) => {
        if (result.value) {

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: $("#form_borrar_"+destino_id).attr('action'),
                method: $("#form_borrar_"+destino_id).attr('method'),
                data:new FormData($("#form_"+destino_id)[0]),
                dataType:'json',
                contentType:false,
                cache:false,
                processData: false,
                beforeSend: function() {

                },
                success:function(data){
                    if(data.codigo==1){
                        $('#lista_'+destino_id).remove();
                        toastr.success(data.mensaje,'MENSAJE DEL SISTEMA',{"progressBar":true,"closeButton":true})
                    }
                    else if(data.codigo==2){
                        toastr.warning(data.mensaje,'MENSAJE DEL SISTEMA',{"progressBar":true,"closeButton":true})
                    }else if(data.codigo==0){
                        toastr.error(data.mensaje,'MENSAJE DEL SISTEMA',{"progressBar":true,"closeButton":true})
                    }
                }
                });
        }
      })
}
function mostrar_destinos(idioma,origen){
    // alert('hola:'+departamento_id);
    console.log('idioma:'+idioma);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        if(origen=='nuevo'){
            $.ajax({
                type:'POST',
                url:'../destinos-inicio/mostrar-destinos',
                data:{idioma:idioma},
                success:function(data){
                    $("select[name='destino'").html('');
                    $("select[name='destino'").html(data.options);
                }
            });
        }
        else if(origen=='editar'){
            $.ajax({
                type:'POST',
                url:'../../destinos-inicio/mostrar-destinos',
                data:{idioma:idioma},
                success:function(data){
                    $("select[name='destino'").html('');
                    $("select[name='destino'").html(data.options);
                }
            });
        }
}
function borrar_imagen_destino_inicio(nombe_id){
    $("#"+nombe_id).remove();
}
function borrarDestino_inicio(destino_id,destino){
    Swal.fire({
        title: 'Esta seguro de borrar el destino de inicio:'+destino+'?',
        text: "Una vez borrado no se podra recuperar la informacion!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Borrar!',
        cancelButtonText: 'Cancelar!'
      }).then((result) => {
        if (result.value) {

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: $("#form_borrar_"+destino_id).attr('action'),
                method: $("#form_borrar_"+destino_id).attr('method'),
                data:new FormData($("#form_"+destino_id)[0]),
                dataType:'json',
                contentType:false,
                cache:false,
                processData: false,
                beforeSend: function() {

                },
                success:function(data){
                    if(data.codigo==1){
                        $('#lista_'+destino_id).remove();
                        toastr.success(data.mensaje,'MENSAJE DEL SISTEMA',{"progressBar":true,"closeButton":true})
                    }
                    else if(data.codigo==2){
                        toastr.warning(data.mensaje,'MENSAJE DEL SISTEMA',{"progressBar":true,"closeButton":true})
                    }else if(data.codigo==0){
                        toastr.error(data.mensaje,'MENSAJE DEL SISTEMA',{"progressBar":true,"closeButton":true})
                    }
                }
                });
        }
      })
}

function mostrar_destinos_lugar_recojo(idioma,destino,origen){
    // alert('hola:'+departamento_id);
    console.log('idioma:'+idioma);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        if(origen=='nuevo'){
            $.ajax({
                type:'POST',
                url:'../destinos-inicio/mostrar-lugar-recojo',
                data:{idioma:idioma,destino:destino},
                success:function(data){
                    $("select[name='lugar_recojo'").html('');
                    $("select[name='lugar_recojo'").html(data.options);
                }
            });
        }
        else if(origen=='editar'){
            $.ajax({
                type:'POST',
                url:'../../destinos-inicio/mostrar-lugar-recojo',
                data:{idioma:idioma,destino:destino},
                success:function(data){
                    $("select[name='lugar_recojo'").html('');
                    $("select[name='lugar_recojo'").html(data.options);
                }
            });
        }
}
