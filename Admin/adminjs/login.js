//validamos login antes de buscar al usuario en la bbdd
function validaLogin(){
    if(validaEmail() == false){
        return false;
    }
    if(validaPassword() == false){
        return false;
    }
    return true;
}
//validamos password mediante llamada al evento en js.
let inputPassword = document.forms["formulario"]["password"];
inputPassword.addEventListener("mouseleave",validaPassword,false);
function validaPassword(){
    let formulario = document.forms["formulario"];
    let password = formulario["password"].value;
    let span =  document.getElementById("msgpassword");
    //en pattr añado el + porque sin el + si hacía un input de letra/numero/letra ejem= e5g fallaba y la que vimos en clase acepta tildes y _
    let pattr = new RegExp("^[0-9a-zA-Z]+$");
    let pattr2 = new RegExp("^.{4,9}$");
    if(pattr.test(password) == false){
        span.innerHTML="Password solo puede contener letras o numeros";
        return false
    }
    if(pattr2.test(password) == false){
    
        span.innerHTML="Password ha de tener entre 4 y 9 caracteres";
        return false
    }
    span.innerHTML="";
    
}
let inputEmail = document.forms["formulario"]["email"];
inputEmail.addEventListener("mouseleave",validaEmail,false);
function validaEmail(){
    let formulario = document.forms["formulario"];
    let email = formulario["email"].value;
    let pattr = new RegExp("^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$");
    let span =  document.getElementById("msgemail");
    if(pattr.test(email) == false){
        span.innerHTML="Debe tener formato mail";
        return false
    }
    span.innerHTML="";
   
}