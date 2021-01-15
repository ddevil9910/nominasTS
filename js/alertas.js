
function alertas_formr(caso){
   switch(caso){
    case 'nombre':
        Swal.fire(
            'Campo no valido!',
            'el nombre de usuario solo admite letras, numeros guion y guion bajo',
            'info'
          )
    break;
    case 'password':
        Swal.fire(
            'Campo no valido!',
            'el Password solo admite letras, numeros guion y guion bajo',
            'info'
          )
    break;
    case 'pasdif':
        Swal.fire(
            'Campo no valido!',
            'los password no coinciden',
            'info'
          )
    break;
    case 'registro':
        Swal.fire(
            'Registrado!',
            'se registro el usuario Correctamente',
            'success'
          )
    break;
        }
}




