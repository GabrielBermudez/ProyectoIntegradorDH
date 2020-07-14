var campoNombre = document.querySelector("#nombre");
var campoApellido = document.querySelector("#apellido");
var campoEdad = document.querySelector("#edad");
var campoEmail = document.querySelector("#email");
var campoContraseña = document.querySelector("#contraseña");
var campoConfirmContraseña = document.querySelector("#confirmarContraseña");
var botonEnviar = document.querySelector("#botonRegistrar");
var formulario = document.querySelector("#formulario");

var labelNombre = document.querySelector("#labelNombre");
var labelApellido = document.querySelector("#labelApellido");
var labelEdad = document.querySelector("#labelEdad");
var labelEmail = document.querySelector("#labelEmail");
var labelContraseña = document.querySelector("#labelContraseña");
var labelConfirmContraseña = document.querySelector("#labelConfirmContraseña");


var errorNombre = "Ingrese un nombre con 3 caracteres minimo";
var errorApellido = "Ingrese un apellido con 3 caracteres minimo";
var errorEdad = "La edad debe ser menor a 150";
var errorEmail = "La direccion de email es incorrecta";
var errorContraseña = "La contraseña debe contener minimo 8 caracteres";
var errorConfirContraseña = "Las contraseñas debe ser iguales";

labelNombre.style.color="red";
labelApellido.style.color="red";
labelEdad.style.color="red";
labelEmail.style.color="red";
labelContraseña.style.color="red";
labelConfirmContraseña.style.color="red";

// console.log(campoNombre);
// console.log(campoApellido);
// console.log(campoEdad);
// console.log(campoEmail);
// console.log(campoContraseña);
// console.log(campoConfirmContraseña);

campoNombre.onchange = function(){
   
    if(campoNombre.value.length >= 3){
        labelNombre.innerText="";

    }else{
        
        labelNombre.innerText =errorNombre; 
        
    }
}

campoApellido.onchange = function(){
   
    if(campoApellido.value.length >= 3){
        labelApellido.innerText="";

    }else{
       
        labelApellido.innerText=errorApellido;
    }
}

campoEdad.onchange = function(){
    
    if(campoEdad.value <= 150 && campoEdad.value > 0){
        labelEdad.innerText="";

    }else{
       
        labelEdad.innerText=errorEdad;
    }
}

campoEmail.onchange = function validarEmail() {

    if (/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(campoEmail.value)){
        labelEmail.innerText = "";
    
    } else {
        
        labelEmail.innerText = errorEmail;
    }
    
    }


campoContraseña.onchange = function(){

    if(campoContraseña.value.length >= 8){
        labelContraseña.innerText="";

    }else{
       
        labelContraseña.innerText=errorContraseña;
    }
}

campoConfirmContraseña.onchange = function(){

    if(campoConfirmContraseña.value == campoContraseña.value){
        labelConfirmContraseña.innerText="";

    }else{
        
        labelConfirmContraseña.innerText=errorConfirContraseña;
    }
}

formulario.onsubmit = function(event) {
    if(campoNombre.value.trim() == ""){
        labelNombre.innerText="";
        labelNombre.innerText="El campo nombre es obligatorio"
        event.preventDefault();

    }else if(campoApellido.value.trim() == ""){
        labelApellido.innerText="";
        labelApellido.innerText="El campo apellido es obligatorio"
        event.preventDefault();

    }else if(campoEdad.value.trim() == ""){
        labelEdad.innerText="";
        labelEdad.innerText="El campo edad es obligatorio"
        event.preventDefault();

    }else if(campoEmail.value.trim() == ""){
        labelEmail.innerText="";
        labelEmail.innerText="El campo email es obligatorio"
        event.preventDefault();

    }else if(campoContraseña.value.trim() == ""){
        labelContraseña.innerText="";
        labelContraseña.innerText="El campo contraseña es obligatorio"
        event.preventDefault();
    
    }else if(campoConfirmContraseña.value.trim() == ""){
        labelConfirmContraseña.innerText="";
        labelConfirmContraseña.innerText="El campo apellido es obligatorio"
        event.preventDefault();
    }

}



