console.log("conectando");

var formulario=document.getElementById('variableGet');

formulario.addEventListener('submit', function(e){
	e.preventDefault();
	console.log("Diste un click OMG :0");

var datos = new FormData(formulario);
console.log(datos.get("barerraperiodo"));

fetch('partials/periodo.php', {
method: 'POST',
body: datos
	})
.then(res=>res.json())
.then(data=>{
	console.log(data);
	})

})