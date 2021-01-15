const nombre = document.getElementById("usuario")
const pass = document.getElementById("pwd")
const passc = document.getElementById("pwdc")
const tipo = document.getElementById("tipo")
const rform = document.getElementById("rform")
const parrafo= document.getElementById("warnings")


rform.addEventListener("submit", e=>{
    e.preventDefault()
    //let regexemail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    let regexusuario= /^\w+([a-zA-z0-9-_]?\w+)+$/
    let regexPass= /^\w+([a-zA-z0-9-_]?\w+)+$/
    let entrar= true
    if(!regexusuario.test(usuario.value)){
        alertas_formr("nombre");
        entrar= false;
    }
    if(!regexPass.test(pass.value)){
        alertas_formr("password");
        entrar= false;
    }
    
    
    if(pass.value != passc.value){
        alertas_formr("pasdif");
        entrar= false;
    }
    
    if (entrar==true){
        alertas_formr("registro");
    }
   
})