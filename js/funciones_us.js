function agregaform(datos){
    d=datos.split('||')
    $('#idac').val(d[0]);
   $('#usac').val(d[1]);
   switch(d[2]){
    case 1:
        $('#tiac').val('ROOT');
    break;
    case '2':
        $('#tiac').val('Administrador');
    break;
    case '3':
        $('#tiac').val('Cliente');
    break;
   }
   $('#esac').val(d[3]);
}

function actualiza(){
    console.log("conectado..");
    id= $('#idac').val();
    usuario= $('#usac').val();
    tipo= $('#tiac').val();
    estado= $('#esac').val();

    
    cadena="id="+id+"&usuario="+usuario+"&tipo="+tipo+"&estado="+estado;

    console.log(cadena);
    $.ajax({
        type:"POST",
        url:"partials/actualizar_usuarios.php",
        data: cadena,
        success:function(r){
            if(r==1){
                $('#tabla').load('componentes/tabla_us.php');
                CierraPopup();
                alertas_formr("usac");
            }else{
                alertas_formr("error");
            }
        }
    });
}



function agregaforme(datos){
    d=datos.split('||')
    $('#ide').val(d[0]);
   $('#use').val(d[1]);
   switch(d[2]){
    case 1:
        $('#tie').val('ROOT');
    break;
    case '2':
        $('#tie').val('Administrador');
    break;
    case '3':
        $('#tie').val('Cliente');
    break;
   }
   $('#ese').val(d[3]);
}


function eliminar_usuario(){
    console.log("conectado..");
    id= $('#ide').val();
    usuario= $('#use').val();
    

    
    cadena="id="+id+"&usuario="+usuario;

    console.log(cadena);
    $.ajax({
        type:"POST",
        url:"partials/eliminar_usuarios.php",
        data: cadena,
        success:function(r){
            if(r==1){
                $('#tabla').load('componentes/tabla_us.php');
                CierraPopupeliminar();
                alertas_formr("usac");
            }else{
                alertas_formr("error");
            }
        }
    });
}






//----Funcion para cerrar los popups------------------
function CierraPopup() {
    $('#Editar').modal('hide');//ocultamos el modal
    $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
    $('.modal-backdrop').remove();//eliminamos el backdrop del modal
}

//----Funcion para cerrar los popups de eliminar------------------
function CierraPopupeliminar() {
    $('#Eliminar').modal('hide');//ocultamos el modal
    $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
    $('.modal-backdrop').remove();//eliminamos el backdrop del modal
}