let cantidad= document.getElementById('cantidad');
let resumen= document.getElementById('resumen');
resumen.addEventListener('click', validar);
let categoria= document.getElementById('categoria');
categoria.addEventListener('change',newFunction);
let categoriaValor=newFunction();
let desc= 0;

function clearTotal(){
    total.value="Total a pagar $"
};

function calculo(){
    nombre.classList.remove("is-invalid");
            correo.classList.remove("is-invalid");
            apellido.classList.remove("is-invalid");
            cantidad.classList.remove("is-invalid");

    switch (parseInt(categoria.options[categoria.selectedIndex].value) ) {
     case 1:
        desc= 0.20
        total.value= total.value + (parseInt(200)*parseFloat(desc)*(cantidad.value));
         break;
     case 2:
        desc=0.5
        total.value= total.value + (parseInt(200)*parseFloat(desc)*(cantidad.value));
         break;
     case 3:
        desc= 0,85
        total.value= total.value + (parseInt(200)*parseFloat(desc)*(cantidad.value));
         break;
     default:
        desc=1
        total.value= total.value + (parseInt(200)* parseFloat(desc)*(cantidad.value));
         break;
    }    
    return;
    }
    if (calculo==true){
        alert('Su solicitud de tickets fue exitosa! .Le llegará un mensaje a su correo electrónico con la confirmación de su compra.');
    }
 
 
function clearForm(){
    document.getElementById("formulario").reset();
}
function newFunction() {
    console.log(categoria.options[categoria.selectedIndex].value);
}
function validar(){
    
    console.log(total.value);
    if (nombre.value=="") {
        alert("debe llenar el campo Nombre");
        nombre.classList.add('is-invalid');
        nombre.focus()
    } else {if (apellido.value=="") {
        
        alert("debe llenar el campo Apellido");
        apellido.classList.add('is-invalid');
        apellido.focus()
        
        
    } else {if (correo.value=="") {
        
        alert("debe llenar el campo correo")
        correo.classList.add("is-invalid")
    } else  { if  (/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(correo.value)){
        if (Number.isNaN(parseInt(cantidad.value))) {
            alert('Debe ingresar una cantidad de tickets válida' );
            cantidad.classList.add("is-invalid")
            correo.focus()
        } else {if (cantidad.value<0 ){
            alert('La cantidad ingresada es incorrecta. Intente ingresar un número válidos(No puede ser negativo))')
        } else {
            calculo();    
        }           
        }
       } else {
        alert("La dirección de email tiene un formato inválido.");
        correo.classList.add("is-invalid");
        correo.focus();
        
       }}}};
       
};
