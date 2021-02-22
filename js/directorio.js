console.log("conectado a js");


function agregaforme(datos){
    d=datos.split('||')
    $('#idnr').val(d[0]);
   $('#nr').val(d[1]);
   $('#bder').val(d[2]);
   $('#ida').val(d[3]);
   $('#adm').val(d[4]);
}



function seleccionar_usuario(){
    console.log("diste un clic");



    id= $('#ide').val();
    usuario= $('#use').val();

  

    Swal.fire({
        icon: 'success',
        title: 'Razon / nombre seleccionado',
        timer: 2000,
        showConfirmButton: false
    });
    
    CierraPopupseleccionar();
}              

//----Funcion para cerrar los popups de eliminar------------------
function CierraPopupseleccionar() {
    $('#select').modal('hide');//ocultamos el modal
    $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
    $('.modal-backdrop').remove();//eliminamos el backdrop del modal
}