/* jshint browser: true */
/* jshint node: true */
/* jshint esversion: 6 */

var e = 0;
var digitos = " 0123456789";
var vocales = " AEIOUX";
var letras = " ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
var consonantes = " BCDFGHJKLMNÑPQRSTVWXYZ";
var sexo = " HM";
var lyn = " ABCDEFGHIJKLMNÑOPQRSTUVWXYZ01234567890";
var direci = " ABCDEFGHIJKLMNÑOPQRSTUVWXYZ01234567890 \,";
var entrar;
var formulario;

/*esta funcion activa el boton de guardar*/
function enableBtn()
{
    if($('#rfc').val().length==12 && $('#curp').val().length==18 && $('#rfcr').val().length==12 && $("#email").val()!=" ")
    {
        if ($("#razon").val()!= " " && $("#representante").val()!=" "){
            $("#btnGuardar").prop("disabled", false);
            entrar=true;
            formulario = document.getElementById('formAltaEmp');
        }
    }
}



$(document).ready(function () {

    /*verifica el nombre o razon social cada que se escribe un caracter*/
    $("#razon").on("input", function () {

        var v = $(this).val().toUpperCase();
        var m = v.length;
        var l = v.length;
       /* la variable iden representa el numero en el id de alerta en el formulario, ejemplo alerta1*/
        var iden = 1;
        var c = "A";
        var exe = 0;
        $(this).val(v);
        var m = v.length;
        e = 0;
        for (i = 0; i < m; i++) {
            c = "" + v.charAt(i);
            if (letras.indexOf(c) < 0) {
                $("#btnGuardar").prop("disabled", true);
                $("#alerta" + iden).html(
                    "<font color=brown><b>La posición " +
                    (i + 1) +
                    " debe ser una letra</b></font>"
                );
                i = l + 1;
                if (exe == 0) e = e + 1;
            }
        }

        if (e < 1) {
            $("#alerta" + iden).html("");
        }
        enableBtn();
    });
    /*/verifica el nombre o razon social cada que se escribe un caracter*/



    /*verifica el rfc cada que se escribe un caracter*/
    $("#rfc").on("input", function () {
        var p = "XXX999999???";
        var l = p.length;
        var v = $(this).val().toUpperCase();
        var m = v.length;
        var iden = 2;
        var c = "A";
        var exe = 0;
        $(this).val(v);
        e = 0;

        if (v.charAt(0) != "*") {
            for (i = 0; i < m; i++) {
                c = "" + v.charAt(i);
                q = p.charAt(i);
                if (q == "?" && lyn.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser una letra o dígito (0-9)</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }
                if (q == "X" && letras.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser una letra</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }
                if (q == "V" && vocales.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser una vocal</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }
                if (q == "C" && consonantes.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser una consonante</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }
                if (q == "9" && digitos.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser un número (0-9)</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }

            }
        } else {
            i = v.length;
        }

        if (m != l && i == m) {
            $("#btnGuardar").prop("disabled", true);
            $("#alerta" + iden).html(
                "<font color=#b22222><b>Deben ser " + l + " caracteres</b></font>"
            );
            if (exe == 0) e = e + 1;
        }
        if (e < 1) {
            $("#alerta" + iden).html("");
        }
        enableBtn();
    });
    /*verifica el rfc cada que se escribe un caracter*/

    /*verifica el CURP cada que se escribe un caracter*/
    $("#curp").on("input", function () {
        var p = "XVXX999999SXXCCC??";
        var l = p.length;
        var v = $(this).val().toUpperCase();
        var m = v.length;
        var iden = 3;
        var c = "A";
        var exe = 0;
        $(this).val(v);
        e = 0;

        if (v.charAt(0) != "*") {
            for (i = 0; i < m; i++) {
                c = "" + v.charAt(i);
                q = p.charAt(i);
                if (q == "?" && lyn.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser una letra o dígito (0-9)</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }
                if (q == "X" && letras.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser una letra</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }
                if (q == "V" && vocales.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser una vocal</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }
                if (q == "C" && consonantes.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser una consonante</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }
                if (q == "9" && digitos.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser un número (0-9)</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }
                if (q == "S" && sexo.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser H(ombre) o M(ujer)</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }
            }
        } else {
            i = v.length;
        }

        if (m != l && i == m) {
            $("#btnGuardar").prop("disabled", true);
            $("#alerta" + iden).html(
                "<font color=#b22222><b>Deben ser " + l + " caracteres</b></font>"
            );
            if (exe == 0) e = e + 1;
        }
        if (e < 1) {
            $("#alerta" + iden).html("");
        }
        enableBtn();
    });
    /*verifica el CURP cada que se escribe un caracter*/

    /*verifica la direccion cada que se escribe un caracter*/
    $("#direccion").on("input", function () {

        var v = $(this).val().toUpperCase();
        var m = v.length;
        var l = v.length;
        var iden = 4;
        var c = "A";
        var exe = 0;
        $(this).val(v);
        var m = v.length;
        e = 0;

        for (i = 0; i < m; i++) {
            c = "" + v.charAt(i);

            if (direci.indexOf(c) < 0) {

                $("#btnGuardar").prop("disabled", true);
                $("#alerta" + iden).html(
                    "<font color=brown><b>La posición " +
                    (i + 1) +
                    " debe ser una letra, numero o coma</b></font>"
                );
                i = l + 1;
                if (exe == 0) e = e + 1;
            }
        }

        if (e < 1) {
            $("#alerta" + iden).html("");
        }
        enableBtn();
    });
    /*/verifica la direccion cada que se escribe un caracter*/

    /*verifica el giro cada que se escribe un caracter*/
    $("#giro").on("input", function () {

        var v = $(this).val().toUpperCase();
        var m = v.length;
        var l = v.length;
        var iden = 5;
        var c = "A";
        var exe = 0;
        $(this).val(v);
        var m = v.length;
        e = 0;
        for (i = 0; i < m; i++) {
            c = "" + v.charAt(i);
            if (letras.indexOf(c) < 0) {
                $("#btnGuardar").prop("disabled", true);
                $("#alerta" + iden).html(
                    "<font color=brown><b>La posición " +
                    (i + 1) +
                    " debe ser una letra</b></font>"
                );
                i = l + 1;
                if (exe == 0) e = e + 1;
            }
        }

        if (e < 1) {
            $("#alerta" + iden).html("");
        }
        enableBtn();
    });
    /*/verifica el giro cada que se escribe un caracter*/


    /*verifica el nombre del representante cada que se escribe un caracter*/
    $("#representante").on("input", function () {

        var v = $(this).val().toUpperCase();
        var m = v.length;
        var l = v.length;
        var iden = 6;
        var c = "A";
        var exe = 0;
        $(this).val(v);
        var m = v.length;
        e = 0;
        for (i = 0; i < m; i++) {
            c = "" + v.charAt(i);
            if (letras.indexOf(c) < 0) {
                $("#btnGuardar").prop("disabled", true);
                $("#alerta" + iden).html(
                    "<font color=brown><b>La posición " +
                    (i + 1) +
                    " debe ser una letra</b></font>"
                );
                i = l + 1;
                if (exe == 0) e = e + 1;
            }
        }

        if (e < 1) {
            $("#alerta" + iden).html("");
        }
        enableBtn();
    });
    /*/verifica el nombre del representante cada que se escribe un caracter*/


    /*verifica el rfc cada que se escribe un caracter*/
    $("#rfcr").on("input", function () {
        var p = "XXX999999???";
        var l = p.length;
        var v = $(this).val().toUpperCase();
        var m = v.length;
        var iden = 7;
        var c = "A";
        var exe = 0;
        $(this).val(v);
        e = 0;

        if (v.charAt(0) != "*") {
            for (i = 0; i < m; i++) {
                c = "" + v.charAt(i);
                q = p.charAt(i);
                if (q == "?" && lyn.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser una letra o dígito (0-9)</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }
                if (q == "X" && letras.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser una letra</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }
                if (q == "V" && vocales.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser una vocal</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }
                if (q == "C" && consonantes.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser una consonante</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }
                if (q == "9" && digitos.indexOf(c) < 1) {
                    $("#btnGuardar").prop("disabled", true);
                    $("#alerta" + iden).html(
                        "<font color=brown><b>La posición " +
                        (i + 1) +
                        " debe ser un número (0-9)</b></font>"
                    );
                    i = l + 1;
                    if (exe == 0) e = e + 1;
                }

            }
        } else {
            i = v.length;
        }

        if (m != l && i == m) {
            $("#btnGuardar").prop("disabled", true);
            $("#alerta" + iden).html(
                "<font color=#b22222><b>Deben ser " + l + " caracteres</b></font>"
            );
            if (exe == 0) e = e + 1;
        }
        if (e < 1) {
            $("#alerta" + iden).html("");
        }
        enableBtn();
    });
    /*verifica el rfc cada que se escribe un caracter*/


    /*verifica el correo electronico cada que se escribe un caracter*/
    $("#email").on("input", function () {
        var iden = 8;
        ValidateEmail($(this).val());

        function ValidateEmail(inputText)
        {
            /*console.log(inputText);*/
            var mailformat = /\S+@\S+\.\S+/;
            if(inputText.match(mailformat))
            {
                $("#alerta" + iden).html("");
                return true;
            }
            else
            {
                $("#btnGuardar").prop("disabled", true);
                $("#alerta" + iden).html(
                    "<font color=brown><b>Escribe un correo valido</b></font>"
                );
                return false;
            }
        }

        enableBtn();
    });
    /*/verifica el correo electronico cada que se escribe un caracter*/





});


formAltaEmp.addEventListener("submit", e=>{
    var datos= new FormData(formulario);
    e.preventDefault()
    console.log("diste clic");
    /*condicional para solicitar el post*/
    if (entrar==true){
        fetch('partials/nuevaEmpresa.php',{
            method:'POST',
            body: datos
        })
            .then(res => res.json())
            .then(data=>{
                console.log(data)
                if(data ==='error'){


                    alertas_formr("des");
                }else{

                    alertas_formr("registro");
                    setTimeout(function(){
                        window.location.reload();
                    }, 5000);
                }
            })
    }


});