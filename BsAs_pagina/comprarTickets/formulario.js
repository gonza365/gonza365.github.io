
let descuento=document.getElementById('descuento');
let cantidad= document.getElementById('cantidad');
let categoria = document.getElementById('cat');


function calculo() {
    if (nombre.value=="") {
        alert("debe llenar el campo Nombre");
        nombre.classlist.add("")
    } else {if (apellido.value=="") {
        alert("debe llenar el campo Apellido")
        apellido.focus()
       
        
    } else {if (correo.value=="") {
        alert("debe llenar el campo correo")
        
    } else  {if (validarCorreo()==true) {
        validarCantidad()
        
    } else {
        
    }
      
    } 
        
    
       }
    }
        
    }
        
    
    function validarCorreo(){
        if (/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(correo.value)){
            
             
            let prod=0

            switch (categoria){
                case 1:
                    desc= 0.85  
                    prod=(200*desc*cantidad.value);
                    console.log(prod)          
                    break;
                case 2:
                    desc= 0.50
                    prod=200*desc*cantidad.value
                    console.log(prod) 
                    break;
                case 3:
                    desc= 0.15
                    prod=200*desc*cantidad
                    console.log(prod) 
                    break;
                default:
                    prod=200;
                    console.log(prod)
                    console.log("no es asi") ;              
                         break;
               }
                         
           } else {
            alert("La dirección de email es incorrecta.")
            
    
               }    }
      
       
       
     
                
   


   /*if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(valor)){
        alert("La dirección de email " + valor + " es correcta.");*/