let cantidad= document.getElementById('cantidad');
let resumen= document.getElementById('resumen')
resumen.addEventListener('click', validar);
let categoria= document.getElementById('categoria');
categoria.addEventListener('change',newFunction);
let categoriaValor=newFunction();
let total= document.getElementById('total');
let desc= 0;

function newFunction() {
    
    
    return console.log(categoria.options[categoria.selectedIndex].value);
}

function validar(){
    if (nombre.value=="") {
        alert("debe llenar el campo Nombre");
        
    } else {if (apellido.value=="") {
        alert("debe llenar el campo Apellido")
        
       
        
    } else {if (correo.value=="") {
        alert("debe llenar el campo correo")
        
    } else  { if  (/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(correo.value)){
        if (Number.isNaN(parseInt(cantidad.value))) {
            alert('Debe ingresar una cantidad de tickets válida' );
        } else {if (cantidad.value<0 ){
            alert('La cantidad ingresada es incorrecta. Intente ingresar un número válido (No puede ser negativo))')
            
        } else {
            calculo();
        }
           
        }


       } else {
        alert("La dirección de email es incorrecta.");
       }}}};
       
};

function calculo(){
    
    switch (parseInt(categoria.options[categoria.selectedIndex].value) ) {
     case 1:
        desc= 0.85
        total.value= total.value + (parseInt(200)*parseInt(desc)*(cantidad.value));
         break;
     case 2:
        desc=0.5
        total.value= total.value + (parseInt(200)*parseInt(desc)*(cantidad.value));
         break;
     case 3:
        desc= 0,15
        total.value= total.value + (parseInt(200)*parseInt(desc)*(cantidad.value));
        
         break;
    
     default:
        desc=1
        total.value= total.value + (parseInt(200)*parseInt(desc)*(cantidad.value))
         
         break;
    }
    
    
    return;

     
 };
function clearForm(){
    document.getElementById("formulario").reset();
}